@extends('layouts.app')
@section('conten')
<div class="row">
    
    <div class="col-md-8">
        <div class="card shadow-lg p-3 mb-5 rounded">
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <div class="well">
                    <form class="form-horizontal" role="form" method="POST" action="/home/submit" enctype="multipart/form-data">
                        @csrf
                        <img src="/uploads/avatars/{{Auth::user()->pimage}}" style="height:40px;width:40px;border-radius: 50%;float: left;margin-right: 10px;margin-bottom: 5px;">
                        <h4>What's New</h4>
                        <div class="form-group" style="padding:0px;">
                            <textarea class="form-control" id="message" name="messegeText" placeholder="Post topic Discussion"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="file" id="imgupload" name="messegeImage" hidden />
                        </div>
                        
                        <button id="sendButton" class="btn btn-primary pull-right" type="submit" style="float:right;"><i class="fas fa-share-square"></i>Share</button>
                        <a class="btn btn-trans btn-icon fas fa-images" title="Upload a File" id="OpenImgUpload" href="#"></a>
                        <a class="btn btn-trans btn-icon fas fa-align-center add-tooltip" href="#" title="Create a Poll"  data-toggle="modal" data-target="#exampleModalCenterPoll"></a>
                        <a class="btn btn-trans btn-icon fas fa-question" id="openCamera" href="#" title="Post A Question" data-toggle="modal" data-target="#exampleModalCenter"></a>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card" >
            @if(count($queans)>0)
            @foreach($queans as $que)
            <div class="card-header"><h3>Question of the Day</h3></div>
            <div class="card-body">
                <h5 class="card-title">Question:&nbsp {{$que->question}}</h5>
                <form class="form-inline" action="answer/submit" method="POST">
                    @csrf
                    <div class="form-group mx-sm-3">
                        <label for="inputPassword2" class="sr-only">Answer</label>
                        <input type="text" name="answer" class="form-control" id="inputPassword2" placeholder="Answer">
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">Check</button>
                </form>
                @include('inc.message')
                <p class="text-center" id="flip">Show Answer</p>
                <p id="panel" style="display:none;">{{$que->answer}}</p>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>
<br>
<!-- User Question Model-->
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Post Your Question</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" method="POST" action="">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Title:</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="name" type="text"  >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Question:</label>
                        <div class="col-lg-12">
                            <input class="form-control" name="dateofbirth" type="text">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Post</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalCenterPoll" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="background-color:#567D8C;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Create Poll</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @include('category.poll')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Post</button>
      </div>
    </div>
  </div>
</div>
<!-- User Post Here -->
@if(count($posts)>0)
@foreach($posts as $posts)
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                
                <div class=" dropleft" style="float:right;">
                    <a class=" dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" >
                       
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Share</a>
                        <a class="dropdown-item" href="{{url("/delet/{$posts->post_id}")}}">Delete</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-1"><img src="/uploads/avatars/{{$posts->propic}}" style="height:50px;width:50px;border-radius: 50%;"></div>
                    <div class="col-sm-11" style="margin-left:-10px;">
                    <small><a href="/profile" style="color: #0b2e13;text-decoration:none;" >{{$posts->user_name}}</a> add new post.</small><br>
                    <small><i class="far fa-calendar-alt"></i> {{date('M j,Y H:i',strtotime($posts->time))}}</small>
                    </div>
                </div>
            </div>
            <p class="card-title" style="margin-left:15px;">{{$posts->messegeText}}</p>
            <img class="img-fluid" src="/uploads/posts/{{$posts->messegeImage}}">
            <hr style="margin-top:0px;">
            <ul>
                
                <li style="margin-right:15px;"><a href="#"><i class="fas fa-thumbs-up">Like</i></a></li>
                <li style="margin-right:15px;"><a href="#"><i class="fas fa-thumbs-down">Dislike</i></a></li>
                <li style="margin-right:15px;"><a href="#"><i class="fas fa-comment">Comment</i></a></li>
            </ul>
        </div>
        
    </div>
</div>
<br>
@endforeach
@endif
<div class="col-md-4"></div>
</div>
<style type="text/css">
    @media screen and (min-width: 480px) {
    body {
        background-color: lightgreen;
    }
}

</style>
<script>
$(document).ready(function(){
$("#flip").click(function(){
$("#panel").slideToggle("slow");
});
});
</script>
<script>
$('#OpenImgUpload').click(function(){ $('#imgupload').trigger('click'); });
$('#OpenCamera').click(function(){ $('#imgupload').trigger('click'); });
$(document).ready(function(){
$('#sendButton').attr('disabled',true);
$('#message').keyup(function(){
if($(this).val().length !=0)
$('#sendButton').attr('disabled', false);
else
$('#sendButton').attr('disabled',true);
})
})
</script>
@endsection
<style>
li {
display: inline;
}
textarea:focus {
padding:20px;
}
</style>