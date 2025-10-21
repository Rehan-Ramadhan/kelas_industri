<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = ['nama', 'nim'];

    // membangun relasi one to one dengan model Wali
    public function wali()
    {
        return $this->hasOne(Wali::class, 'id_mahasiswa');
    }

    public function dosen()
    {
    return $this->belongsTo(Dosen::class, 'id_dosen');
    }

}
