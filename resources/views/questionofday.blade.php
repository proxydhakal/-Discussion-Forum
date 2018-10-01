@extends('layouts.app')
@section('content')
<div class="container" style="background-color:#f4f986;">
    <h1 class="text-center">Update Question</h1>
    {!! Form::open(['url' => 'question/submit']) !!}
    <div class="form-group">
        {{Form::label('question', 'Question')}}
        {{Form::text('question', '',['class'=> 'form-control','placeholder' => 'Question'])}}
    </div>
    <div class="form-group">
        {{Form::label('answer', 'Answer')}}
        {{Form::text('answer', '',['class'=> 'form-control','placeholder' => 'Enter Answer'])}}
    </div>
    <div>
        {{Form::submit('Submit',['class'=> 'btn btn-success'])}}
    </div>
    {!! Form::close() !!}
</div>
<div class="container">
    <h1>Question</h1>
   
    <table class="table table-striped" data-toggle="table">
        <thead >
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Question</th>
                <th scope="col">Answer</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($questions as $question)
            <tr>
                <td>{{$question->id}}</td>
                <td>{{$question->question}}</td>
                <td>{{$question->answer}}</td>
                <td><a href="{{url("/delete/{$question->id}")}}"> <i class="fas fa-trash"></i></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
 
</div>
@endsection