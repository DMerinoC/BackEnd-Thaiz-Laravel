<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function createUser(CreateUserRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'nickname' => $request->nickname,
            'password' => Hash::make($request->password),
            'state' => 'activo',
            'user_type_id' => 4,
            'email' => $request->email,
        ]);
        return response()->json([
            'status' => true,
            'message' => 'User created successfully',
            'token' => $user->createToken("API TOKEN")->plainTextToken
        ], 200);
    }
    public function loginUser(LoginRequest $request)
    {
        if (!Auth::attempt($request->only(['nickname', 'password']))) {
            return response([
                'status' => false,
                'message' => 'Las credenciales no coinciden.'
            ], 401);
        }
        $user = User::where('nickname', $request->nickname)->first();
        return response()->json([
            'status' => true,
            'message' => 'Las credenciales coinciden.',
            'token' => $user->createToken("API TOKEN")->plainTextToken
        ], 200);
    }
}
