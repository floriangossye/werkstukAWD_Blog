@extends('main')
@section('title','| Florian Gossye')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1 class="display-3">Florian Gossye</h1>
                <p class="lead">Welcome to my official blog</p>
                <hr class="my-4">
                <p>Please register before posting blogposts</p>
                <p class="lead">

                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            @foreach($posts as $post)
                <div class="post">
                    <h3>{{$post->title}}</h3>
                    <p>{{substr(strip_tags($post->body),0,300)}} {{ strlen(strip_tags($post->body)) > 300 ? "..." : ""}}</p>
                    <a href="{{ url('blog/'.$post->slug) }}" class="btn" btn-primary>Read More</a>
                </div>
                <hr>
            @endforeach
        </div>

    </div>
@endsection

