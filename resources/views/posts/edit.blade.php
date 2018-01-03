@extends('main')
@section('title', '| Edit')
@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/select2.min.css') !!}
@endsection
@section('content')

    <div class="row">
        {!! Form::model($post, ['route' => ['posts.update',$post->id], 'method'=>'PUT']) !!}
        <div class="col-md-8">

            {{Form::label('title','Title:')}}
            {{Form::text('title', null, ["class" => 'form-control input-lg'])}}

            {{Form::label('slug','Slug:',["class"=>'form-spacing-top'])}}
            {{Form::text('slug', null, ["class" => 'form-control'])}}

            {{Form::label('category_id','Category:')}}
            {{Form::select('category_id', $categories ,null,['class'=>'form-control'])}}

            {{Form::label('tags','Tags'),['class'=>'form-spacing-top']}}
            {{Form::select('tags[]', $tags ,null,['class'=>'form-control select2-multi','multiple'=>'multiple'])}}

            {{Form::label('body','Body:',['class'=>'form-spacing-top'])}}
            {{Form::textarea('body', null,["class"=> 'form-control','id'=>'bodyField'])}}
            @ckeditor('bodyField')
        </div>
    </div>

<div class="row">
        <div class="col-md-4">
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
    </div>
        {!! Form::close()!!}

@endsection
@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
    {!! Html::script('js/select2.min.js') !!}
    <script type="text/javascript">
        $('.select2-multi').select2();
        $('.select2-multi').select2().val({!! json_encode($post->tags()->allRelatedIds())!!}).trigger('change');

    </script>
@endsection