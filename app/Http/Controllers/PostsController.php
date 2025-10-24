<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostsController extends Controller
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
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|string|max:255',
                'content' => 'required|string|max:255',
                'cover' => 'required',
            ],
            [
                'title.required' => 'Title tidak boleh kosong',
                'content.required' => 'Content tidak boleh kosong',
                'cover.required' => 'Cover tidak boleh kosong',
            ]);

        $post = new Post();
        $post->title = $request->title;
        // $post->content = $request->content;

        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/post', $name);
            $post->cover = $name;
        }

        $post->save();

        session()->flash('success', 'Data berhasil ditambahkan');

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        // $post->content = $request->content;

        if ($request->hasFile('cover')) {
            $filePath = public_path('images/post/' . $post->cover);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }

            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/post', $name);
            $post->cover = $name;
        }

        $post->save();

        session()->flash('success', 'Data berhasil diupdate');

        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);

        // Menghapus file gambar dari direktori
        if ($post->cover) {
            $filePath = public_path('images/post/' . $post->cover);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
        }

        $post->delete();

        return redirect()->route('post.index')->with('success', 'Data berhasil dihapus');
    }
}
