<?php

namespace App\Http\Controllers;

use App\Models\Jadwal_imunisasi;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('jadwal_imun.index', [
            'jadwals' => Jadwal_imunisasi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Jadwal_imunisasi $jadwal_imunisasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jadwal_imunisasi $jadwal_imunisasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jadwal_imunisasi $jadwal_imunisasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jadwal_imunisasi $jadwal_imunisasi)
    {
        //
    }
}
