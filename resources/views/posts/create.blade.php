@extends('main')

@section('title','|Create post')
@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
<h1>Create Post</h1>
        <hr>
        {!! Form::open(['url' => 'foo/bar']) !!}
        {{Form::label('title','Title:')}}
        {{Form::text('title',null,array('class'=>'form-control'))}}
        {{Form::label('body','Post:')}}
        {{Form::textarea('body',null,array('class'=>'form-control'))}}
        {{Form::submit('Create Post',array('class'=>'btn btn-success btn-lg btn-block','style'=> 'margin-top:20px;'))}}
        {!! Form::close() !!}
    </div>
</div>
@endsection