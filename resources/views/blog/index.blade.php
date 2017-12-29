@extends('main')
@section('title','| Blog')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Blog</h1>
        </div>
    </div>
    @foreach($posts as $post)
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>{{$post->title}}</h1>
            <h5>Published: {{date('j M, Y',strtotime($post->created_at))}}</h5>
            <p>{{substr($post->body,0,250)}}{{strlen($post->body) >250 ? '...' : ""}}</p>
            <a href="{{ route('blog.single', $post->slug) }}" class="btn btn-primary">Read More</a>
        </div>
    </div>
        <hr>
    @endforeach
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                {!! $posts->links() !!}
            </div>
        </div>
    </div>
    @endsection