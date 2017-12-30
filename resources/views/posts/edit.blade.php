@extends('main')
@section('title', '| Edit')
@section('content')
    <div class="row">
        {!! Form::model($post, ['route' => ['posts.update',$post->id], 'method'=>'PUT']) !!}
        <div class="col-md-12">
            {{Form::label('title','Title:')}}
            {{Form::text('title', null, ["class" => 'form-control input-lg'])}}

            {{Form::label('slug','Slug:',["class"=>'form-spacing-top'])}}
            {{Form::text('slug', null, ["class" => 'form-control'])}}

            {{Form::label('category_id','Category:')}}
            {{Form::select('category_id', $categories ,null,['class'=>'form-control'])}}

            {{Form::label('body','Body:',['class'=>'form-spacing-top'])}}
            {{Form::textarea('body', null,["class"=> 'form-control'])}}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Created at: </dt>
                    <dd>{{date('j M Y H:i', strtotime($post->created_at)) }}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Last updated: </dt>
                    <dd>{{date('j M Y H:i',strtotime($post->updated_at)) }}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.show','Cancel', array($post->id),array('class'=>'btn btn-danger btn-block')) !!}

                    </div>
                    <div class="col-sm-6">
                        <div class="col-m-6">
                            {{Form::submit('Save',['class'=>'btn btn-success btn-block' ])}}

                        </div>
                    </div>
                </div>

            </div>
        </div>
        {!! Form::close()!!}
    </div>
@endsection