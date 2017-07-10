@extends('main')

@section('title', '| Create New Post')

@section('content')

<div class="row">

    <h3>Create New Post</h3>

    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <hr>

    {!! Form::open(['route' => 'posts.store']) !!}

        <div class="input-field col s6 offset-s3">        
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', null, ['id' => 'title']) }} 
        </div>

        <div class='input-field col s6 offset-s3'>
        {{ Form::label('slug', 'Slug') }}
        {{ Form::text('slug', null, ['id' => 'slug']) }}
        </div>
        
        <div class='input-field col s6 offset-s3'>        
        {{ Form::label('icon', 'Icon') }}
        {{ Form::text('icon', null) }}
        </div>

        <div class='input-field col s6 offset-s3'>        
        {{ Form::label('content', 'Content') }}
        {{ Form::textarea('content', null, ['class' => 'materialize-textarea', 'cols' => 80, 'rows' => 50]) }}
        </div>

        <div class='input-field col s6 offset-s3'>        
        {{ Form::submit('Create Post', ['class' => 'waves-effect waves-light btn', 'type' => 'submit']) }}
        </div>
    {!! Form::close() !!}
</div>
@endsection