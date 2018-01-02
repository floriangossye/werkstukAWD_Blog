@extends('main')
@section('title','| Tags')
@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>Tags</h1>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>name</th>
                </tr>
                </thead>
                <tbody>

                @foreach($tags as $tag)
                    <tr>
                        <th>{{$tag->id}}</th>
                        <th>{{$tag->name}}</th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-3">
            <div class="well">
                {!! Form::open(['route'=>'tags.store','method'=>'POST']) !!}
                <h1>New Tag</h1>
                {{Form::label('name','Name:')}}
                {{Form::text('name',null,['class'=>'form-control'])}}
                {{Form::submit('Create tag',['class'=>'btn btn-primary btn-block btn-h1-spacing'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection