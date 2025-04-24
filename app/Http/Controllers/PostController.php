<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|min:3',
        'content' => 'required|min:5',
    ]);

    $validated['user_id'] = auth()->id(); // Този ред е задължителен!

    Post::create($validated);
    return redirect()->route('posts.index')->with('success', 'Заявката беше подадена успешно!');
}

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('edit', compact('post'));
    }

  
    public function update(Request  $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|min:3',
            'content' => 'required|min:5',
        ]);

        $post->update($validated);
        return redirect()->route('posts.index')->with('success', 'Post updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {

        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted!');
    }
}
