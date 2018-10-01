@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Messages</h1>
    @if(count($message)>0)
    <table class="table table-striped" data-toggle="table">
        <thead >
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($message as $message)
            <tr>
                <td>{{$message->name}}</td>
                <td>{{$message->email}}</td>
                <td>{{$message->message}}</td>
                <td><a href="{{url("/delete/{$message->id}")}}"> <i class="fas fa-trash"></i></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection