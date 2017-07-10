<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate incoming data
        // icon, content, title
        /*
        $icons = [
            'star',
            'comment',
            'warning',
            'error',
            'announcement'
        ];
        */
        
        
        $this->validate($request, [
            'title' => 'required|unique:posts|max:255',
            'icon'  => 'required|max:255',
            'slug'  => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
            'content'  => 'required',
        ]);

        $post = new Post;

        $post->title = $request->title;
        $post->icon = $request->icon;
        $post->slug = $request->slug;
        $post->content = $request->content;
        $post->save();
        Session::flash('success', 'Post created.');
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $p = Post::find($id);
        return view('posts.show')->withPost($p);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $p = Post::find($id);
        return view('posts.edit')->withPost($p);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        // Only validate slug if it's changed
        if ($request->input('slug') != $post->slug) {
            $this->validate($request, [
                'slug'  => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
            ]);
        }

        $this->validate($request, [
            'title' => 'required|max:255',
            'icon'  => 'required|max:255',            
            'content'  => 'required',
        ]);

        $post->title    = $request->title;
        $post->icon     = $request->icon;
        $post->slug     = $request->slug;
        $post->content  = $request->content;
        $post->save();

        Session::flash('success', 'Post saved.');

        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        Session::flash('success', 'Post deleted.');
        return redirect()->route('posts.index');
    }
}
