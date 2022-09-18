<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function getPost(){
        
        $post = Post::all();
        return view('post',['posts'=>$post]);
    }
}
