@extends('main')
@section('title', '| View Posts')
@section('content')
    <div class="section">

        
        <div class="row">
            <div class="col s12">

                <div class="right">
                    <a href="{{ route('posts.create') }}" class="waves-effect waves-light btn">
                        <i class="material-icons small indigo-text left">add_box</i>New Post
                    </a>
                </div>
            </div>
        </div>

        <table>
            <thead>
                <th>#</th>
                <th>Icon</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Content</th>
                <th>Created</th>
                <th>Updated</th>
                <th colspan="3" style="text-align: center;">Controls</th>
            </thead>

            <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td><span class="indigo-text"><i class="material-icons">{{ $post->icon }}</i></span></td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->slug }}</td>
                <td>{{ substr($post->content, 0, 128) }} {{ strlen($post->content) > 128 ? '...' : '' }}</td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
                <td>
                    <a href="{{ route('posts.show', $post->id) }}" class="waves-effect waves-light btn-flat">                        
                        <i class="material-icons tiny left indigo-text">description</i>
                    </a>
                </td>
                <td>
                    <a href="{{ route('posts.edit', $post->id) }}" class="waves-effect waves-light btn-flat">
                        <i class="material-icons tiny left indigo-text">mode_edit</i>
                    </a>
                </td>
                <td>
                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                    
                    {!! Form::button('<span class="indigo-text"><i class="material-icons tiny">delete</i></span>', ['type' => 'submit', 'class' => 'btn-flat waves-effect waves-light btn-delete']) !!}

                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
            </tbody>
        </table>

        <div class="row">
            <div class="center-align">
                {!! $posts->links(); !!}
            </div>
        </div>

    </div>            
@endsection