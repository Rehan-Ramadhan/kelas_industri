<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // kolom/field yang boleh diisi secara massal
    protected $fillable = ['id', 'title', 'cover', 'content'];
    public $timestamps = true;
}
