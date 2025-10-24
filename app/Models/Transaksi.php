<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'id_barang', 'id_pembeli', 'tanggal_transaksi', 'jumlah', 'total_harga'];
    public $timestamps = true;

    // relasi ke model Barang & Pembeli
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang');
    }
    public function pembeli()
    {
        return $this->belongsTo(Pembeli::class, 'id_pembeli');
    }
}
