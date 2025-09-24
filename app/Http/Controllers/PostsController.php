<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    Public function menampilkan() {
        $post = Post::all();
        return view('halaman_post2', compact('post'));
    }
}
