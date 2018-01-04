@extends('main')

@section('title', '| Dashboard')
{!! Charts::styles() !!}
@section('content')
    <h1>Dashboard Admin</h1>
    <div class="row">
        <div class="col-md-4">
            {!! $chart->html(['class'=>'graphs-margin']) !!}
        </div><br>
        <div class="col-md-4">
            {!! $chart2->html() !!}
        </div>
        <div class="col-md-4">
            {!! $chart3->html() !!}
        </div>

        </div>







    {!! Charts::scripts() !!}
    {!! $chart->script() !!}
    {!! $chart2->script() !!}
    {!! $chart3->script() !!}

@endsection