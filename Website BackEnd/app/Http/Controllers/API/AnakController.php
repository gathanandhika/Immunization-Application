<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Anak;
use App\Models\User;
use Illuminate\Http\Request;

class AnakController extends Controller
{
    public function profile(Request $request){
        $user = $request->user();
        $anak = Anak::where('id_orangtua', $user['id'])->first();

        $response = [
            'user' => $user,
            'anak' => $anak
        ];

        return response($response, 201);
    }

    public function store(Request $request)
    {
        $id = $request->user()->id;
        $data = $request->validate([
            'nama' => 'required|string',
            'usia' => 'required|string',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required|string',
            'tinggi_badan' => 'required|integer',
            'berat_badan' => 'required|integer',
            'nohp_ortu' => 'required|string',
            'alamat' => 'required|string'
        ]);
        $user = User::find($id);
        $anak = Anak::create([
            'nama' => $data['nama'],
            'usia' => $data['usia'],
            'tanggal_lahir' => $data['tanggal_lahir'],
            'jenis_kelamin' => $data['jenis_kelamin'],
            'tinggi_badan' => $data['tinggi_badan'],
            'berat_badan' => $data['berat_badan'],
            'nama_orangtua' => $user->nama,
            'nohp_ortu' => $data['nohp_ortu'],
            'alamat' => $data['alamat'],
            'id_orangtua' => $user->id
        ]);

        $response = [
            'message' => 'Data Berhasil ditambah',
            'data_anak' => $anak
        ];

        return response($response, 201);
    }

    public function update($id, Request $request){

        // membuat validasi data
        $validate = $request->validate([
            'nama' => '',
            'usia' => '',
            'tanggal_lahir' => '',
            'jenis_kelamin' => '',
            'tinggi_badan' => '',
            'berat_badan' => '',
            // 'nama_orangtua' => '',
            'nohp_ortu' => ''
            // 'alamat' => '',
        ]);

        // update data
        $user = User::find($id);
        $anak = Anak::where('id_orangtua', $user['id']);
        $anak->nama = $request->nama;
        $anak->usia = $request->usia;
        $anak->tanggal_lahir = $request->tanggal_lahir;
        $anak->jenis_kelamin = $request->jenis_kelamin;
        $anak->tinggi_badan = $request->tinggi_badan;
        $anak->berat_badan = $request->berat_badan;
        $anak->nama_orangtua = $user->nama;
        $anak->nohp_ortu = $request->nohp_ortu;
        $anak->alamat = $request->alamat;
        $anak->id_orangtua = $user->id;

        // kondisi
        if($anak->save()){
            return response()->json('Bersasil');
        }else{
            return response()->json('Oppss, Gagal');
        }
    }
}
