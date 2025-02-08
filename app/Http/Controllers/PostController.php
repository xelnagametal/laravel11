<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create', [ 'post' => new Post ]);
    }

    public function store(SavePostRequest $request)
    {
        Post::create($request->validated());

        return to_route('posts.index')->with('message', __('Post created successfully'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(SavePostRequest $request, Post $post)
    {
        $post->update($request->validated());

        return to_route('posts.show', $post)->with('message', __('Post updated successfully'));
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return to_route('posts.index')->with('message', __('Post deleted successfully'));
    }
}