<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_kelas = Kelas::all();
        return view('kelas.index', compact('data_kelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kelas' => 'required|string|max:255',], [
            'nama_kelas.required' => 'Nama Kelas tidak boleh kosong',]);

            $data_kelas = new Kelas;
            $data_kelas->nama_kelas = $request->nama_kelas;
            $data_kelas->save();

            session()->flash('success', 'Data berhasil ditambahkan');
            return redirect()->route('kelas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data_kelas = Kelas::findOrFail($id);
        return view('kelas.show', compact('data_kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data_kelas = Kelas::findOrFail($id);
        return view('kelas.edit', compact('data_kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $kelas)
    {
        $data_kelas = Kelas::findOrFail($kelas);
        $request->validate([
            'nama_kelas' => 'required|string|max:255',], [
            'nama_kelas.required' => 'Kelas tidak boleh kosong',]);
        $data_kelas->nama_kelas = $request->nama_kelas;
        $data_kelas->save();
        
        session()->flash('success', 'Data berhasil diupdate');
        return redirect()->route('kelas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data_kelas = Kelas::findOrFail($id);
        $data_kelas->delete();

        session()->flash('success', 'Data berhasil dihapus');
        return redirect()->route('kelas.index');
    }
}
