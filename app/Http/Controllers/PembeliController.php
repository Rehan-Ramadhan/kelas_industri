<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_pembeli = Pembeli::all();
        return view('pembeli.index', compact('data_pembeli'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pembeli.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pembeli' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:10',
            'telepon' => 'required|string|max:15',
        ], [
            'nama_pembeli.required' => 'Nama Pembeli tidak boleh kosong',
            'jenis_kelamin.required' => 'Jenis Kelamin tidak boleh kosong',
            'telepon.required' => 'No. Telepon tidak boleh kosong',
        ]);

        $data_pembeli = new Pembeli;
        $data_pembeli->nama_pembeli = $request->nama_pembeli;
        $data_pembeli->jenis_kelamin = $request->jenis_kelamin;
        $data_pembeli->telepon = $request->telepon;
        $data_pembeli->save();

        session()->flash('success', 'Data berhasil ditambahkan');
        return redirect()->route('pembeli.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data_pembeli = Pembeli::findOrFail($id);
        return view('pembeli.show', compact('data_pembeli'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data_pembeli = Pembeli::findOrFail($id);
        return view('pembeli.edit', compact('data_pembeli'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_pembeli' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:10',
            'telepon' => 'required|string|max:15',
        ], [
            'nama_pembeli.required' => 'Nama Pembeli tidak boleh kosong',
            'jenis_kelamin.required' => 'Jenis Kelamin tidak boleh kosong',
            'telepon.required' => 'No. Telepon tidak boleh kosong',
        ]);

        $data_pembeli = Pembeli::findOrFail($id);
        $data_pembeli->nama_pembeli = $request->nama_pembeli;
        $data_pembeli->jenis_kelamin = $request->jenis_kelamin;
        $data_pembeli->telepon = $request->telepon;
        $data_pembeli->save();

        session()->flash('success', 'Data berhasil diupdate');
        return redirect()->route('pembeli.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data_pembeli = Pembeli::findOrFail($id);
        $data_pembeli->delete();

        session()->flash('success', 'Data berhasil dihapus');
        return redirect()->route('pembeli.index');
    }
}
