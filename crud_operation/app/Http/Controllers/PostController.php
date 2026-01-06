<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // List all posts
    public function index() {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    // Show create form
    public function create() {
        return view('posts.create');
    }

    // Store new post
    public function store(Request $request) {
        $request->validate([
            'title' => 'required|min:3',
            'content' => 'required'
        ]);
        Post::create($request->only('title','content'));
        return redirect()->route('posts.index')->with('success', 'Post created');
    }

    // Show edit form
    public function edit(Post $post) {
        return view('posts.edit', compact('post'));
    }

    // Update post
    public function update(Request $request, Post $post) {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        $post->update($request->only('title','content'));
        return redirect()->route('posts.index')->with('success', 'Post updated');
    }

    // Delete post
    public function destroy(Post $post) {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted');
    }
    //sample controller
    public function show($post)
{
    $name = "Muthumari";
    $age = 20;

    return view('home', compact('name', 'age'));
}
}
