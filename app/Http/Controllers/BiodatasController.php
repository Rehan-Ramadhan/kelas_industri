<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BiodatasController extends Controller
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
        $biodatas = Biodata::all();
        return view('biodata.index', compact('biodatas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('biodata.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama_lengkap' => 'required|string|max:255',
                'jenis_kelamin' => 'required|string|in:Laki-laki,Perempuan',
                'tanggal_lahir' => 'required|date',
                'tempat_lahir' => 'required|string|max:255',
                'agama' => 'required|string|max:50',
                'alamat' => 'required|string',
                'telepon' => 'required|string|max:20',
                'email' => 'required|email|max:255|unique:biodatas,email',

            ],
            [
                'nama_lengkap.required' => 'Wajib diisi',
                'jenis_kelamin.required' => 'Wajib diisi',
                'tanggal_lahir.required' => 'Wajib diisi',
                'tempat_lahir.required' => 'Wajib diisi',
                'agama.required' => 'Wajib diisi',
                'alamat.required' => 'Wajib diisi',
                'telepon.required' => 'Wajib diisi',
                'email.required' => 'Wajib diisi',
            ]);

        $biodata = new Biodata();
        $biodata->nama_lengkap = $request->nama_lengkap;
        $biodata->jenis_kelamin = $request->jenis_kelamin;
        $biodata->tanggal_lahir = $request->tanggal_lahir;
        $biodata->tempat_lahir = $request->tempat_lahir;
        $biodata->agama = $request->agama;
        $biodata->alamat = $request->alamat;
        $biodata->telepon = $request->telepon;
        $biodata->email = $request->email;
        
        if ($request->hasFile('foto_profil')) {
            $img = $request->file('foto_profil');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/biodata', $name);
            $biodata->foto_profil = $name;
        }

        $biodata->save();

        session()->flash('success', 'Data berhasil ditambahkan');

        return redirect()->route('biodata.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $biodata = Biodata::find($id);
        return view('biodata.show', compact('biodata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $biodata = Biodata::find($id);
        return view('biodata.edit', compact('biodata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'nama_lengkap' => 'required|string|max:255',
                'jenis_kelamin' => 'required|string|in:Laki-laki,Perempuan',
                'tanggal_lahir' => 'required|date',
                'tempat_lahir' => 'required|string|max:255',
                'agama' => 'required|string|max:50',
                'alamat' => 'required|string',
                'telepon' => 'required|string|max:20',
                'email' => 'required|email|max:255|unique:biodatas,email',

            ],
            [
                'nama_lengkap.required' => 'Wajib diisi',
                'jenis_kelamin.required' => 'Wajib diisi',
                'tanggal_lahir.required' => 'Wajib diisi',
                'tempat_lahir.required' => 'Wajib diisi',
                'agama.required' => 'Wajib diisi',
                'alamat.required' => 'Wajib diisi',
                'telepon.required' => 'Wajib diisi',
                'email.required' => 'Wajib diisi',
            ]);

        $biodata = Biodata::findOrFail($id);
        $biodata->nama_lengkap = $request->nama_lengkap;
        $biodata->jenis_kelamin = $request->jenis_kelamin;
        $biodata->tanggal_lahir = $request->tanggal_lahir;
        $biodata->tempat_lahir = $request->tempat_lahir;
        $biodata->agama = $request->agama;
        $biodata->alamat = $request->alamat;
        $biodata->telepon = $request->telepon;
        $biodata->email = $request->email;
        
        if ($request->hasFile('foto_profil')) {
            $filePath = public_path('images/biodata/' . $biodata->foto_profil);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }

            $img = $request->file('foto_profil');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/biodata', $name);
            $biodata->foto_profil = $name;
        }

        $biodata->save();

        session()->flash('success', 'Data berhasil diupdate');

        return redirect()->route('biodata.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $biodata = Biodata::findOrFail($id);

        if ($biodata->foto_profil) {
            $filePath = public_path('images/post/' . $biodata->foto_profil);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
        }

        $biodata->delete();

        return redirect()->route('biodata.index')->with('success', 'Data berhasil dihapus');
    }
}
