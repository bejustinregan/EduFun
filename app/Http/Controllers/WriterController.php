<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function index(){
        $writers = Writer::all();
        return view('writers', [
            'writers' => $writers
        ]);
    }

    public function show(Writer $writer){
        $posts = $writer->posts()->get();
        return view('writers', [
            'writer' => $writer,
            'posts' => $posts
        ]);
    }
}
