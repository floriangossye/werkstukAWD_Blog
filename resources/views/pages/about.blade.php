@extends('main')
@section('title','| About')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Contact me</h1>
            <p>Lorem ipsum
                suuizefezfiuerejfreuifrejiferifjierjkefksnfjkqdnjksfdsfjkqfjksqfhjkfqhjkhjhjkf,kqhfjqfjkhdsqfdsqjkfhqskd</p>
        </div>
    </div>

<hr>

    <div class="row">
        <div class="col-md-12">
            <form action="{{url('about')}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label name="email">Email:</label>
                    <input id="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label name="subject">Subject:</label>
                    <input id="subject" name="subject" class="form-control">
                </div>
                <div class="form-group">
                    <label name="message">Message:</label>
                    <textarea id="message" name="message" class="form-control">What is your question?</textarea>
                </div>
                <input type="submit" value="send" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection