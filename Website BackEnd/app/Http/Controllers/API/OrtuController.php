<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OrtuController extends Controller
{
    public function index(){
        //
    }

    public function profile(Request $request)
    {
        return $request->user();
    }

    public function update($id, Request $request)
    {
        // membuat validasi data
        $validate = $request->validate([
            'nama' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|min:8|string',
        ]);

        // update data
        $user = User::find($id);
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->password = Hash::make($request->email);

        // kondisi
        if($user->save()){
            return response()->json('Bersasil');
        }else{
            return response()->json('Oppss, Gagal');
        }
    }
}
