<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;

class PostController extends Controller
{
    public function index()
    {
        $searchResult = \request('search') ?? '';

        $posts = Post::with('user')
            ->where('title','like',"%{$searchResult}%")
            ->orWhere('content','like',"%{$searchResult}%")
            ->latest()
            ->paginate(4)
            ->withQueryString();
        return view('posts.index',['posts'=>$posts,'totalCountPosts'=>$posts->total()]);
    }


    public function create()
    {
        return view('posts.create');
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Post $post)
    {
        return view("posts.show", ["post"=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
