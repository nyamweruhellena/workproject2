<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function getPosts(){
        
        $posts = Post::with('muser')->get(); // hapa we are querying all posts from the posts table... itakurudishia collection of all posts

        // dd($posts);
        // debugging... hapa unapata a display of all the raw data from the database table
        $users=User::all();

        // dd($posts[0]->muser);
        return view('pages.posts', 
            ['posts' => $posts,'users'=>$users]
        );
    }
    public function deletePost($id){
    
    
        // $post = Post::with('muser')->find($id);
        // $post->delete();

        // Okay now.....
        // Hapa tunatafuta post kwa id na pia tunaangalia kama user anayetaka kufuta post ni mmoja na mmoja na user aliyetengeneza post
        // kama ni mmoja na mmoja basi tunafuta post na relationship zake kwa kutumia delete() method
        if ($post = Post::with('comments')->find($id)) {
            

            // Hii ni old conventional way ya kufuta post ila kuna njia clean zaidi ya kufuta post
            foreach ($post->comments as $comment) {
                $comment->delete();
            }

            

            if ($post->delete()) {
                
                return redirect()->back()->with('status', 'Post deleted successfully');
            } else return redirect()->back()->with('status', 'Failed to delete post');
        } else return redirect()->back()->with('status', 'Post not found');
        // return redirect()->back()->with('status','Post Deleted Successfully');
    
    }

    public function getPost($id){
        $post = Post::with('muser')->find($id); // hapa we are querying a single post from the posts table... itakurudishia collection of a single post

        // dd($post); debugging... hapa unapata a display of all the raw data from the database table

        return view('pages.post', 
            ['post' => $post]
        );
    }
    public function create(Request $request)
    {
       
        $path = $request->file('post')->store('/public/posts');
        
        if(Post::create([
            "user" => $request->user,
            "content" => $request->content,
            'path' => $path,
       ])) return back()->with("message","post created successfully");
       else return back()->with("message","post creation failed");
    }

    // public function update(Request $request)
    // {
    //     $user = Post::create([
    //         "user" => $request->user,
    //         "content" => $request->content,
    //         'path' => $request->path,
    //     ]);

    //     if ($user)
    //         return redirect()->back();
    // }

}
