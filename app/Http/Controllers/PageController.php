<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function blog()
    {
        // $posts = [
        //     ['id'   =>  1,  'title' =>  'PHP',  'slug'=>    'php'],
        //     ['id'   =>  2,  'title' =>  'Laravel',  'slug'=>    'Laravel']
        // ];
        // $posts = Post::get();
        // $post = Post::first();
        // $post = Post::find(25);

        // dd($post);

        $posts = Post::latest()->paginate();

        // dd($posts);

        return view('blog', ['posts'   =>  $posts]);
    }
    public function post(Post $post)
    {
        //$post = $slug;

        return view('post', ['post'   =>  $post]);
    }
}
