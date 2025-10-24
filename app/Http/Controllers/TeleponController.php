<?php

namespace App\Http\Controllers;

use App\Models\Telepon;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class TeleponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_telepon = Telepon::all();
        return view('telepon.index', compact('data_telepon'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_telepon = Telepon::all();
        return view('telepon.create', compact('data_telepon'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     $request->validate(
        [
            'nomor' => 'required|string|max:255',
        ],
[
            'nomor.required' => 'Nomor tidak boleh kosong.',
        ]
    );

        $telepon = new Telepon();
        $telepon->nomor = $request->nomor;
        $telepon->id_telepon = $request->id_telepon;

        $telepon->save();

        session()->flash('success', 'Telepon berhasil ditambahkan.');
        return redirect()->route('telepon.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Telepon $telepon)
    {
        $telepon = Telepon::findOrFail($telepon->id);
        return view('telepon.show', compact('telepon'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Telepon $telepon)
    {
        $data_telepon = Telepon::findOrFail($telepon->id);
        $pengguna = Pengguna::all();
        return view('telepon.edit', compact('data_telepon', 'pengguna', 'telepon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Telepon $telepon)
    {
        $request->validate(
            [
                'nomor' => 'required|string|max:255',
            ],
            [
                'nomor.required' => 'Nomor tidak boleh kosong.',
            ]
        );
        
        $data_telepon = Telepon::findOrFail($telepon->id);
        $data_telepon->nomor = $request->nomor;
        $data_telepon->id_pengguna = $request->id_pengguna;

        $data_telepon->save();

        session()->flash('success', 'Nomor berhasil diupdate.');
        return redirect()->route('telepon.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Telepon $telepon)
    {
        $telepon = Telepon::find($telepon->id);
        $telepon->delete();

        session()->flash('success', 'Nomor berhasil dihapus.');
        return redirect()->route('telepon.index');
    }
}
