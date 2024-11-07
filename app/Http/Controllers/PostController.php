<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post){
        return view('posts', [
            'post' => $post
        ]);
    }

    public function popular(){
        $posts = Post::orderBy('view_count', 'desc')->simplePaginate(3);
        return view('posts', [
            'posts' => $posts
        ]);
    }
}
