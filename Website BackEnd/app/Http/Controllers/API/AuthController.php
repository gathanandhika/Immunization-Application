<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function register(Request $request) {
        $data = $request->validate([
            'nama' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|min:8|string|confirmed',
            'role' => 'required|string'

        ]);

        $user = User::create([
            'nama' => $data['nama'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role']
        ]);

        $token = $user->createToken('Myapp')->plainTextToken;

        $response =[
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function login(Request $request) {
        $data = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        // check email
        $user = User::where('email', $data['email'])->first();

        // check password
        if (!$user || !Hash::check($data['password'], $user->password)) {
            return response([
                'message' => 'Opppss... Login Gagal'
            ], 401);
        }

        $token = $user->createToken('Myapp')->plainTextToken;

        $response =[
            'user' => $user,
            'token' => $token
        ]; 

        return response($response, 201);
    }

    public function logout(Request $request) {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Anda Sudah Logout Bro'
        ];
    }
}
