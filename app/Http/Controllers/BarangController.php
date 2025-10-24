<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_barang = Barang::all();
        return view('barang.index', compact('data_barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'merek' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
        ], [
            'nama_barang.required' => 'Nama Barang tidak boleh kosong',
            'merek.required' => 'Merek tidak boleh kosong',
            'harga.required' => 'Harga tidak boleh kosong',
            'stok.required' => 'Stok tidak boleh kosong',
        ]);

        $data_barang = new Barang;
        $data_barang->nama_barang = $request->nama_barang;
        $data_barang->merek = $request->merek;
        $data_barang->harga = $request->harga;
        $data_barang->stok = $request->stok;
        $data_barang->save();

        session()->flash('success', 'Data berhasil ditambahkan');
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data_barang = Barang::findOrFail($id);
        return view('barang.show', compact('data_barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data_barang = Barang::findOrFail($id);
        return view('barang.edit', compact('data_barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data_barang = Barang::findOrFail($id);
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'merek' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
        ], [
            'nama_barang.required' => 'Nama Barang tidak boleh kosong',
            'merek.required' => 'Merek tidak boleh kosong',
            'harga.required' => 'Harga tidak boleh kosong',
            'stok.required' => 'Stok tidak boleh kosong',
        ]);

        $data_barang->nama_barang = $request->nama_barang;
        $data_barang->merek = $request->merek;
        $data_barang->harga = $request->harga;
        $data_barang->stok = $request->stok;
        $data_barang->save();

        session()->flash('success', 'Data berhasil diupdate');
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data_barang = Barang::findOrFail($id);
        $data_barang->delete();

        session()->flash('success', 'Data berhasil dihapus');
        return redirect()->route('barang.index');
    }
}
