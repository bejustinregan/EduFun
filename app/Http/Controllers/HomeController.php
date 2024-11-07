<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $posts = Post::limit(5)->get();
        return view('home', [
            'posts' => $posts
        ]);
    }

    public function aboutus(){
        return view('about');
    }
}
