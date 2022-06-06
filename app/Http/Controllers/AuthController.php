<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Jobs\SendEmail;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use ApiResponser;

    public function register(Request $request)
    {
        $user = User::where('phone_number', $request->phone_number)->first();
        if ($user) {
            return response()->json([
                'status' => 400,
                'message' => 'User already exists'
            ]);
        }

        $attr = $request->validate([
            'phone_number' => 'required|unique:users',
            'password' => 'required'
        ]);


        $user1 = User::create([
            'password' => bcrypt($attr['password']),
            'phone_number' => $attr['phone_number']
        ]);

        return response()->json([
            'status' => 201,
            'message' => 'Register successfully'
        ]);
    }

    public function login(Request $request)
    {
        $user = User::where('phone_number', $request->phone_number)->first();

        if (!$user) {
            return response()->json([
                'status' => 400,
                'message' => 'User does not exists'
            ]);
        }

        $attr = $request->validate([
            'phone_number' => 'required',
            'password' => 'required'
        ]);

        if (!Auth::attempt($attr)) {
            return response()->json([
                'status' => 401,
                'message' => 'Unauthorized'
            ]);
        }

        return response()->json([
            'status' => 200,
            'accessToken' => $user->createToken('API Token')->plainTextToken,
            'message' => 'Login successfully'
        ]);
    }

    public function loginAdmin(Request $request)
    {
        $user = User::where('phone_number', $request->phone_number)->first();

        if (!$user) {
            return response()->json([
                'status' => 400,
                'message' => 'User does not exists'
            ], 400);
        }

        $attr = $request->validate([
            'phone_number' => 'required',
            'password' => 'required'
        ]);

        if (!Auth::attempt($attr) || !$user->is_admin) {
            return response()->json([
                'status' => 401,
                'message' => 'Unauthorized'
            ], 401);
        }

        return response()->json([
            'status' => 200,
            'data'=> [
                'token' => $user->createToken('API Token')->plainTextToken,
                'expired_time' => 315360000
            ],
            'message' => 'Login successfully'
        ]);
    }

    public function forgotPassword(Request $request) {
        $user = User::where('phone_number', $request->phone_number)->first();

        if (!$user) {
            return response()->json([
                'status' => 404,
                'message' => 'User does not exists'
            ], 404);
        }

        if ($user->email != $request->email) {
            return response()->json([
                'status' => 400,
                'message' => 'Wrong email'
            ], 400);
        }
        
        $resetPassword=env('DEFAULT_PASSWORD');
        $user->password=bcrypt($resetPassword);
        $user->save();

        if ($user->email) {
            $message = [
                'type' => 'Đặt lại mật khẩu',
                'content' => "Mật khẩu của bạn đã được đặt lại về $resetPassword, vui lòng đăng nhập vào hệ thống và đổi lại mật khẩu để tránh mất tài khoản",
            ];

            SendEmail::dispatch($message, $user)->delay(now()->addMinute(1));
        }

        return response()->json([
            'status' => 200,
            'message' => 'Restore successfully'
        ]);
    }

    public function logout(Request $request)
    {
        try {
            $request->user()->currentAccessToken()->delete();

            return response()->json([
                'status' => 200,
                'message' => 'Logout successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 500,
                'message' => 'Something was wrong'
            ]);
        }
    }
}
