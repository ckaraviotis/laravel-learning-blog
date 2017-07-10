<?php

namespace App\Http\Controllers;
use App\Post;
use Session;

/*
 * Simple controller for static Pages
 */
class PagesController extends Controller
{   
    public function getIndex() {
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('pages/welcome')->withPosts($posts);        
    }

    public function getAbout() {
        $data = [];
        $data['name'] = 'Christian Karaviotis';
        $data['email'] = 'christian.karaviotis@gmail.com';
        $data['phone'] = '01273 123 456';

        return view('pages/about')->withData($data);
    }

    public function getContact() {
        return view('pages/contact');
    }
}
