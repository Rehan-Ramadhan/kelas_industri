<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = "transaksis";
    protected $fillable = [
        'nama_barang',
        'harga_barang',
        'jumlah',
        'total_harga',
        'tanggal_beli',
    ];

}
