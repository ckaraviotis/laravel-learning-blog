@extends('main')
@section('title', '| View Post')
@section('content')
    <div class="section">        

        <div class="row">
            <div class="col s1 offset-s12">
                <div class="left">
                    <a href="{{ route('posts.edit', $post->id) }}">
                        <span class="indigo-text"><i class="material-icons tiny">mode_edit</i></span>
                    </a>
                </div>
                <div class="left">
                    <a href="{{ route('posts.destroy', $post->id) }}">
                        <span class="indigo-text"><i class="material-icons tiny">delete</i></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col s12 m12">
                <div class="icon-block">
                    <h5>
                        <span class="indigo-text"><i class="material-icons">{{ $post->icon }}</i></span>
                        {{ $post->title }}
                    </h5>                    
                                       
                    <p class="light">                        
                        {!! nl2br(e($post->content )) !!}
                    </p>

                    <div class="left">
                        <a href="{{ route('blog.show', $post->slug) }}">Permalink</a>
                    </div>

                    <div class="right">
                        Posted on: {{ date('D jS F, Y', strtotime($post->updated_at)) }}
                    </div>
                </div>
            </div>
        </div>        

    </div>            
@endsection