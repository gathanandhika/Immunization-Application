<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OrangtuaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $all = User::where('role', '=', 'orang tua')->get();
        $keyword = $request->keyword;
        $data = User::where('nama', 'LIKE', '%'.$keyword.'%')
                ->where('role', '=', 'orang tua')
                ->paginate(10);

        $data->appends($request->all());
        return view('orangtua.index', compact('data', 'keyword', 'all'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orangtua.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // User::insert([
        //     'nama' => $request->nama,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        //     'role' => $request->role,
        //  ]);

        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email:dns',
            'password' => 'required',
            'role' => 'required',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);

        return redirect ('/data-anak/create')->with('success', 'Akun baru ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
