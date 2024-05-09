<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with(['user', 'likes'])->paginate(5); //returns all posts in the database in order
        return view('posts.index', [
            'posts' => $posts
        ]);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);
       $request->user()->posts()->create($request->only('body'));
       return back();
    }
    public function destroy(Post $post){
        $post->delete();

        return back();
    }
}
