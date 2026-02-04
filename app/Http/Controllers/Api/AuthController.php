<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $user = User::create($request->only([
            'name',
            'email',
            'phone',
            'password',
        ]));

        return response()->json([
            'message' => 'Registration successful',
            'token' => 'jwt_token_placeholder',
            'user' => new UserResource($user),
        ]);
    }

    public function login(Request $request)
    {
        return response()->json([
            'message' => 'Login successful',
            'token' => 'jwt_token_placeholder',
            'user' => new UserResource(User::first()),
        ]);
    }

    public function logout()
    {
        return response()->json([
            'message' => 'Logout successful',
        ]);
    }

    public function forgotPassword(Request $request)
    {
        return response()->json([
            'message' => 'Password reset link sent',
        ]);
    }

    public function profile()
    {
        return response()->json([
            'user' => new UserResource(User::first()),
        ]);
    }
}
