<?php

namespace App\Http\Controllers;

use App\Models\KembangAnak;
use Illuminate\Http\Request;
use App\Http\Requests\StoreKembangAnakRequest;
use App\Http\Requests\UpdateKembangAnakRequest;
use App\Models\Anak;

class KembangAnakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $all = Anak::all()->count();
        $keyword = $request->keyword;
        $data = Anak::where('nama', 'LIKE', '%'.$keyword.'%')
                ->orWhere('nama_orangtua', 'LIKE', '%'.$keyword.'%')
                ->paginate(10);

        $data->appends($request->all());
        return view('perkembangan.index', compact('data', 'keyword', 'all'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('perkembangan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($id, Request $request)
    {
        $anak = Anak::find($id);
        $data = $request->validate([
            'id_anak' => 'required',
            'tinggi_badan' => 'required',
            'berat_badan' => 'required'
        ]);

        KembangAnak::create($data);

        return redirect('/perkembangan')->with('succes, data perkembangan berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(KembangAnak $kembangAnak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KembangAnak $kembangAnak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKembangAnakRequest $request, KembangAnak $kembangAnak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KembangAnak $kembangAnak)
    {
        //
    }
}
