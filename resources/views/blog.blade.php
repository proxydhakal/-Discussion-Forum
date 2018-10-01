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
      @if(count($blogs)>0)
      @foreach($blogs as $blog)
      <div class="post-preview">
        <a href="{{url("/forum/{$blog->blog_id}")}}">
          <h2 class="post-title">
          {{$blog->title}}
          </h2>
          <h5 class="post-subtitle">
          {{$blog->subtitle}}
          </h5>
        </a>
        <p class="post-meta">Posted by
          <a href="/profile">{{$blog->user_name}}</a>
        on  {{date('M j,Y H:i',strtotime($blog->time))}}</p>
        @if($blog->user_id == Auth::user()->id)
        <a class="btn btn-sm btn-primary" href="" data-toggle="modal"data-target="#exampleModalCenter"><i class="fas fa-edit"></i>Edit</a>
        <a class="btn btn-sm btn-danger" href="{{url("/del/{$blog->blog_id}")}}"><i class="fas fa-trash"></i> Delete</a>
        @endif
      </div>
      @endforeach
      
      @endif
      <hr>
      {{ $blogs->links() }}
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Blog</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       @include('category.form')
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