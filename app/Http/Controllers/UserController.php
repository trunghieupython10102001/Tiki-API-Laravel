<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUsers()
    {
        return response()->json([
            'users' => User::all()
        ]);
    }

    public function getUser($userId)
    {
        $user = User::where('id', $userId)->first();
        if (!$user->is_admin) {
            return response()->json([
                'status' => 401,
                'message' => 'Unauthorized'
            ]);
        }
        return response()->json([
            'status' => 200,
            'user' => $user
        ]);
    }

    public function updateUser(Request $request, $userId)
    {
        $user = User::find($userId);
        if (!$user) {
            return response()->json([
                'status' => 400,
                'message' => 'User not found'
            ], 404);
        }

        // $user->update([
        //     'nick_name' => $request->email
        // ]);
        $user->update($request->all());
        // $user->save();
        return response()->json([
            'status' => 201,
            'email' => $request->email,
            'user' => $user,
            'message' => 'Update user information successfully'
        ]);
    }
}
