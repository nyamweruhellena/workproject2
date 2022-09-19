<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function getPosts(){
        
        $posts = Post::with('user')->get(); // hapa we are querying all posts from the posts table... itakurudishia collection of all posts

        // dd($posts); debugging... hapa unapata a display of all the raw data from the database table

        return view('pages.posts', 
            ['posts' => $posts]
        );
    }

    public function getPost($id){
        $post = Post::with('user')->find($id); // hapa we are querying a single post from the posts table... itakurudishia collection of a single post

        // dd($post); debugging... hapa unapata a display of all the raw data from the database table

        return view('pages.post', 
            ['post' => $post]
        );
    }
}
