<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Requests\RegisterRequest;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ApiAuthController extends Controller
{
    public function users()
    {
        return response()->json([
            'user' => User::get(),
        ], 200);
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        $token = $user->createToken('token')->plainTextToken;
        if(!$user) {
            return response()->json([
                'message' => 'Registration failed!',
            ], 400);
        }
        return response()->json([
            'message' => 'You have registered successfully!',
            'token' => $token,
        ], 200);
    }

    public function login(Request $request)
    {
        if(Auth::attempt($request->only('email', 'password'))) {
            $user = User::where('email', $request->email)->first();
            $token = $user->createToken('token')->plainTextToken;
            return response()->json([
                'message' => 'Welcome back '.$user->username,
                'token' => $token,
            ], 200);
        } else {
            return response()->json([
                'message' => "Invalid credentials",
            ]);
        }
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        return response()->json([
            'message' => 'Loged out'
        ], 200);
    }
}
