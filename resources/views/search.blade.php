@extends('layouts.app')
@section('forum')
<header class="masthead" style="background-image: url('/assets/home-bg.jpg');background-size:cover;
  border-radius: 25px;
  background-position: 50% 50%;">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  
  
  <div class="text-center">
    <h1  style="color:#4265f4;">Heraldians Blog</h1>
    
  </div>
  
</header>
<a style="float: right;" href="/add/blog"><button class="btn btn-primary" title="Post your own blog!"><i class="fas fa-plus-circle"></i></button></a>
<!-- Main Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <div class="panel panel-default">
                            <div class="panel-body">
                                @if ( $questions->isEmpty() )
                                    <p> There are no questions.</p>
                                @else
                                    <div id="questions">
                                        <legend class="text-left">
                                            <h1>"{{$query}}" Search Results</h1>
                                        </legend>
                                    </div>
                                    @foreach( $questions as $question )
                                        @include('containers.question')
                                        @if($questions->last() != $question)
                                            <hr>
                                        @endif
                                    @endforeach
                                    {{ $questions->links() }}
                                @endif
                            </div>
                        </div>
    </div>
  </div>
</div>
<style>
a {
color: #212529;
-webkit-transition: all 0.2s;
-moz-transition: all 0.2s;
transition: all 0.2s;
}
a:focus, a:hover {
color: #0085A1;
text-decoration:none;
}

</style>
@endsection