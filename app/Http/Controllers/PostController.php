<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index()
    { 
        //$posts = Post::orderBy('id','DESC')->paginate();
        //return view('index', compact('posts'));
        return Post::orderBy('id','DESC')->paginate();
    }

    
}
