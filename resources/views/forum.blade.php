@extends('layouts.app')
@section('forum')
<div class="row">
  <!-- Post Content Column -->
  @if(count($blogs)>0)
@foreach($blogs->all() as $blogs)
  <div class="col-lg-8">
    <div class="card p-3">
      <div class="card-header">
    <!-- Title -->
    <h1 class="mt-4"> {{$blogs->title}}</h1>
    <!-- Author -->
    <p class="lead">
       {{$blogs->subtitle}}
    </p>
    <div class="fb-share-button" data-href="/{{Request::path()}}" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="/{{Request::path()}}" class="fb-xfbml-parse-ignore">Share</a></div>
    </div>
    
    <!-- Date/Time -->
    <p>{{date('M j,Y H:i',strtotime($blogs->updated_at))}}</p>
    <hr>
    <!-- Preview Image -->
    <img class="img-fluid rounded" src="/uploads/blogs/{{$blogs->image}}" alt="">
    <hr>
    <p class="lead" align="justify">{{!!$blogs->body!!}}</p>
    <hr>
    <div class="fb-comments" data-href="{{Request::url()}}" data-width="100%" data-numposts="2"></div>
    </div>
    </div>
    @endforeach
  @endif
  </div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=218129105504539&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

@endsection