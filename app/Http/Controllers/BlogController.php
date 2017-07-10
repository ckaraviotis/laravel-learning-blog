<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function show($slug) {        
        $post = Post::where('slug', '=', $slug)->first();
        return view('blog.show')->withPost($post);
    }

    public function index() {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('blog.index')->withPosts($posts);
    }
}
