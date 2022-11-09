<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function indexx()
    {
        return view('index', [
            "title" => "Content",
            "posts" => Post::all()
        ]);
    }

    public function show($slug)
    {
        return view('post', [
            "title" => "single post",
            "post" => Post::find($slug)
        ]);
    }
}
