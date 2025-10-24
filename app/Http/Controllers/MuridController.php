<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use App\Models\Kelas;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_murid = Murid::all();
        return view('murid.index', compact('data_murid'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_kelas = Kelas::all();
        return view('murid.create', compact('data_kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama_lengkap' => 'required|string|max:255',
                'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
                'tanggal_lahir' => 'required|date',
                'tempat_lahir' => 'required|string|max:255',
                'alamat' => 'required|string|max:500',
                'email' => 'required|email|max:255',
            ],
    [
                'nama_lengkap.required' => 'Nama tidak boleh kosong.',
                'jenis_kelamin.required' => 'Jenis kelamin tidak boleh kosong.',
                'tanggal_lahir.required' => 'Tanggal lahir tidak boleh kosong.',
                'tempat_lahir.required' => 'Tempat lahir tidak boleh kosong.',
                'alamat.required' => 'Alamat tidak boleh kosong.',
                'email.required' => 'Email tidak boleh kosong.',
            ]
        );

        $data_murid = new Murid();
        $data_murid->nama_lengkap = $request->nama_lengkap;
        $data_murid->jenis_kelamin = $request->jenis_kelamin;
        $data_murid->tanggal_lahir = $request->tanggal_lahir;
        $data_murid->tempat_lahir = $request->tempat_lahir;
        $data_murid->agama = $request->agama;
        $data_murid->alamat = $request->alamat;
        $data_murid->email = $request->email;
        $data_murid->id_kelas = $request->id_kelas;
        $data_murid->save();

        session()->flash('success', 'Data berhasil ditambahkan.');
        return redirect()->route('murid.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data_murid = Murid::findOrFail($id);
        return view('murid.show', compact('data_murid'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data_murid = Murid::findOrFail($id);
        $data_kelas = Kelas::all();
        return view('murid.edit', compact('data_murid', 'data_kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $murid)
    {
        $request->validate(
            [
                'nama_lengkap' => 'required|string|max:255',
                'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
                'tanggal_lahir' => 'required|date',
                'tempat_lahir' => 'required|string|max:255',
                'alamat' => 'required|string|max:500',
                'email' => 'required|email|max:255' . $murid,
            ],
    [
                'nama_lengkap.required' => 'Nama tidak boleh kosong.',
                'jenis_kelamin.required' => 'Jenis kelamin tidak boleh kosong.',
                'tanggal_lahir.required' => 'Tanggal lahir tidak boleh kosong.',
                'tempat_lahir.required' => 'Tempat lahir tidak boleh kosong.',
                'alamat.required' => 'Alamat tidak boleh kosong.',
                'email.required' => 'Email tidak boleh kosong.',
            ]
        );

        $data_murid = Murid::findOrFail($murid);
        $data_murid->nama_lengkap = $request->nama_lengkap;
        $data_murid->jenis_kelamin = $request->jenis_kelamin;
        $data_murid->tanggal_lahir = $request->tanggal_lahir;
        $data_murid->tempat_lahir = $request->tempat_lahir;
        $data_murid->alamat = $request->alamat;
        $data_murid->email = $request->email;
        $data_murid->id_kelas = $request->id_kelas;
        $data_murid->save();

        session()->flash('success', 'Data berhasil diperbarui.');
        return redirect()->route('murid.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data_murid = Murid::findOrFail($id);
        $data_murid->delete();

        session()->flash('success', 'Data berhasil dihapus.');
        return redirect()->route('murid.index');
    }
}
