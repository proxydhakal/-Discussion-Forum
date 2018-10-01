@extends('layouts.app')
@section('content')
<div class="container" style="background-color:#f4f986;">
    <h1 class="text-center">Update Notice</h1>
    {!! Form::open(['url' => 'notice/submit']) !!}
    <div class="form-group">
        {{Form::label('group', 'Group')}}
        {{Form::text('group', '',['class'=> 'form-control','placeholder' => 'Group Name'])}}
    </div>
    <div class="form-group">
        {{Form::label('date', 'Date')}}
        {{Form::date('date', '',['class'=> 'form-control','placeholder' => 'Enter Date'])}}
    </div>
    <div class="form-group">
        {{Form::label('notice', 'Notice')}}
        {{Form::textArea('notice', '',['class'=> 'form-control','placeholder' => 'Notice!!'])}}
    </div>
    <div>
        {{Form::submit('Submit',['class'=> 'btn btn-success'])}}
    </div>
    {!! Form::close() !!}
</div>
@endsection