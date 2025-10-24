<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Barang;
use App\Models\Pembeli;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_transaksi = Transaksi::all();
        return view('transaksi.index', compact('data_transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_transaksi = Transaksi::all();
        $data_barang = Barang::all();
        $data_pembeli = Pembeli::all();
        return view('transaksi.create', compact('data_transaksi', 'data_barang', 'data_pembeli'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
    [
                'tanggal_transaksi' => 'required|date',
                'jumlah' => 'required|integer|min:1',
                'total_harga' => 'required|numeric|min:0',
            ],
    [
                'tanggal_transaksi.required' => 'Tanggal transaksi tidak boleh kosong.',
                'jumlah.required' => 'Jumlah tidak boleh kosong.',
                'total_harga.required' => 'Total harga tidak boleh kosong.',
            ]
        );

        $data_transaksi = new Transaksi();
        $data_transaksi->id_pembeli = $request->id_pembeli;
        $data_transaksi->id_barang = $request->id_barang;
        $data_transaksi->tanggal_transaksi = $request->tanggal_transaksi;
        $data_transaksi->jumlah = $request->jumlah;
        $data_transaksi->total_harga = $request->total_harga;
        $data_transaksi->save();

        session()->flash('success', 'Data transaksi berhasil ditambahkan.');
        return redirect()->route('transaksi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('transaksi.show', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data_transaksi = Transaksi::findOrFail($id);
        $data_barang = Barang::all();
        $data_pembeli = Pembeli::all();
        return view('transaksi.edit', compact('data_transaksi', 'data_barang', 'data_pembeli'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
    [
                'tanggal_transaksi' => 'required|date',
                'jumlah' => 'required|integer|min:1',
                'total_harga' => 'required|numeric|min:0',
            ],
            [
                'tanggal_transaksi.required' => 'Tanggal transaksi tidak boleh kosong.',
                'jumlah.required' => 'Jumlah tidak boleh kosong.',
                'total_harga.required' => 'Total harga tidak boleh kosong.',
            ]
        );

        $data_transaksi = Transaksi::findOrFail(id: $id);
        $data_transaksi->id_pembeli = $request->id_pembeli;
        $data_transaksi->id_barang = $request->id_barang;
        $data_transaksi->tanggal_transaksi = $request->tanggal_transaksi;
        $data_transaksi->jumlah = $request->jumlah;
        $data_transaksi->total_harga = $request->total_harga;
        $data_transaksi->save();

        session()->flash('success', 'Data transaksi berhasil diperbarui.');
        return redirect()->route('transaksi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data_transaksi = Transaksi::findOrFail($id);
        $data_transaksi->delete();
        session()->flash('success', 'Data transaksi berhasil dihapus.');
        return redirect()->route('transaksi.index');
    }
}
