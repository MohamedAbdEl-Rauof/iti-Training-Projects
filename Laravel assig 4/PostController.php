<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class PostController extends Controller
{
    // Select 
    public function getPosts()
    {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    // Insert 
    public function createPost(Request $request)
    {
        $post = new Post([
            'user_id' => $request->input('user_id'),
            'title' => $request->input('title')

        ]);
        $post->save();
        return redirect()->route('posts.index');
    }

    


}