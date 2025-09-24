<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodatasController extends Controller
{
    public function menampilkan() {
        $biodata = Biodata::all();
        return view('halaman_biodata', compact('biodata'));
    }
}
