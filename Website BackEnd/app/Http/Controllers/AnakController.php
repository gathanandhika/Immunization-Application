<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\User;
use Illuminate\Http\Request;

class AnakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $anaks = Anak::where('nama', 'LIKE', '%'.$keyword.'%')
                ->paginate(10);

        $anaks->appends($request->all());
        return view('anak.index', compact('anaks', 'keyword'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = User::where('role', '=', 'orang tua')->get();
        return view('anak.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $ortu = $request->nama_ortu;
        // $id = User::where('nama', '=', $request->nama)->get();
        $data_anak = $request->validate([
            'nama' => 'required',
            'usia' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'tinggi_badan' => 'required',
            'berat_badan' => 'required',
            'nama_ortu' => 'required',
            'nohp_ortu' => 'required',
            'alamat' => 'required',

        ]);
        $user = User::where('nama', '=', 'nama_ortu')->get();
        Anak::create([
            'nama' => $data_anak['nama'],
            'usia' => $data_anak['usia'],
            'tanggal_lahir' => $data_anak['tanggal_lahir'],
            'jenis_kelamin' => $data_anak['jenis_kelamin'],
            'tinggi_badan' => $data_anak['tinggi_badan'],
            'berat_badan' => $data_anak['berat_badan'],
            'nama_orangtua' => $data_anak['nama_ortu'],
            'nohp_ortu' => $data_anak['nohp_ortu'],
            'alamat' => $data_anak['alamat'],
            'id_orangtua' => $user->id
        ]);

        // Anak::create($k);

        return redirect('data-anak')->with('Data Anak Berhasil Ditambahkan!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Anak $anak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anak $anak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anak $anak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anak $anak)
    {
        //
    }
}
