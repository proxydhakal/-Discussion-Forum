@extends('layouts.app')
@section('contact')
<div class="shadow-md p-3 rounded" style="background-color:#e8ebef;">
    <h1 class="text-center">Let us know how we can help!</h1>
    {!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '',['class'=> 'form-control','placeholder' => 'Enter Name'])}}
    </div>
    <div class="form-group">
        {{Form::label('email', 'E-Mail Address')}}
        {{Form::email('email', '',['class'=> 'form-control','placeholder' => 'Enter Email'])}}
    </div>
    <div class="form-group">
        {{Form::label('message', 'Message')}}
        {{Form::textArea('message', '',['class'=> 'form-control','placeholder' => 'Enter Message!!'])}}
    </div>
    <div>
        {{Form::submit('Submit',['class'=> 'btn btn-success'])}}
    </div>
    {!! Form::close() !!}
</div>
@endsection