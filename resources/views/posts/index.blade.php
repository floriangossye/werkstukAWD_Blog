@extends('main')

@section('title', '| All Posts')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <h1>All Posts</h1>
        </div>
        <div class="col-md-2">
            <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create
                Post</a>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created At</th>
                    <th></th>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <th>{{$post->id}}</th>
                            <td>{{$post->title}}</td>
                            <td>{{substr($post->body,0,75)}}{{ strlen($post->body) > 75 ? "..." : "" }}</td>
                            <td>{{date('j M Y', strtotime($post->created_at))}}</td>
                            <td><a href="{{ route('posts.show',$post->id) }}" class="btn btn-default">View</a><a href="{{ route('posts.edit',$post->id) }}" class="btn btn-default">Edit</a>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection