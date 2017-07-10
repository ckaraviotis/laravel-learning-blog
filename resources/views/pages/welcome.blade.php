@extends('main')
@section('title', '| Home')
@section('content')
    <div class="section">

    <h1 class="header center indigo-text">Example Blog Project</h1>
    <div class="row center">
        <h5 class="header col s12 light">This is a demonstrative implementation of a blog system in Laravel 5.4. A selection of the latest posts can be seen below.</h5>
    </div>

    @foreach($posts as $post)
        <div class="row">
            <div class="col s12 m12">
                <div class="icon-block">
                    <h5>
                        <span class="indigo-text"><i class="material-icons">{{ $post->icon }}</i></span>
                        <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                    </h5>

                    <p class="light">
                        {{ substr($post->content, 0, 255) }}
                        {{ strlen($post->content) > 255 ? "..." : "" }}
                    </p>

                    

                    <div class="right">
                        Posted on {{ date('D jS F, Y', strtotime($post->updated_at)) }}
                    </div>
                </div>
            </div>
        </div>        
    @endforeach


    </div>            
@endsection