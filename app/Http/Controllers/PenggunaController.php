<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengguna = Pengguna::all();
        // return view('pengguna.index', compact('pengguna'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pengguna = new Pengguna();
        $pengguna->name = $request->input('name');

        $pengguna->save();

        session()->flash('success', 'Pengguna berhasil ditambahkan.');
        // return redirect()->route('pengguna.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengguna $pengguna)
    {
        $pengguna = Pengguna::find($pengguna->id);
        // return view('pengguna.show', compact('pengguna'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengguna $pengguna)
    {
        $pengguna = Pengguna::find($pengguna->id);
        // return view('pengguna.edit', compact('pengguna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengguna $pengguna)
    {
        $pengguna = Pengguna::find($pengguna->id);
        $pengguna->name = $request->input('name');

        $pengguna->save();

        session()->flash('success', 'Pengguna berhasil diupdate.');
        // return redirect()->route('pengguna.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengguna $pengguna)
    {
        $pengguna = Pengguna::find($pengguna->id);
        $pengguna->delete();

        session()->flash('success', 'Pengguna berhasil dihapus.');
        // return redirect()->route('pengguna.index');
    }
}
