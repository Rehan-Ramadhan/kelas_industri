<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_kelas'];
    public $timestamps = true;
    
    // relasi ke model Murid
    public function murids()
    {
        return $this->hasMany(Murid::class);
    }
}
