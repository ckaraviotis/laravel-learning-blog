@extends('main')

@section('title', '| Edit Post')

@section('content')

<div class="row">

    <h3>Edit Post</h3>
    
    <hr>

    {!! Form::model($post, ['method' => 'put', 'route' => ['posts.update', $post->id]]) !!}

        <div class='input-field col s6 offset-s3'>
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', $post->title) }}
        </div>

        <div class='input-field col s6 offset-s3'>
        {{ Form::label('slug', 'Slug') }}
        {{ Form::text('slug', $post->slug) }}
        </div>
        
        
        <div class='input-field col s6 offset-s3'>        
        {{ Form::label('icon', 'Icon') }}
        {{ Form::text('icon', $post->icon) }}
        </div>

        <div class='input-field col s6 offset-s3'>        
        {{ Form::label('content', 'Content') }}
        {{ Form::textarea('content', $post->content, ['class' => 'materialize-textarea', 'cols' => 80, 'rows' => 50]) }}
        </div>

        <div class='input-field col s6 offset-s3'>        
        {{ Form::submit('Save Changes', ['class' => 'waves-effect waves-light btn', 'type' => 'submit']) }}
        </div>
    {!! Form::close() !!}
</div>


@endsection