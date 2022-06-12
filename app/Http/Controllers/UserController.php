<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUsers()
    {
        $limit = request()->limit ?? 100;
        $sort_by = request()->sort_by ?? 'created_at';
        $order_by = request()->order_by ?? 'asc';

        $users = User::where('is_admin', '!=', 1)->orderBy($sort_by, $order_by)->paginate($limit);
        return UserResource::collection($users);
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
