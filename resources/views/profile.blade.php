@extends('layouts.app')
@section('content')
<div class="container">
    <div class="shadow-lg p-3 mb-5  rounded" style="background-color: #ECECEA;">
        <h1>{{$user->name}}'s Profile</h1>
        <hr>
        <div class="row">
            <!-- left column -->
            <div class="col-md-4">
                <div class="text-center">
                     <div class="shadow-sm p-3 mb-5 rounded" style="background-color:#80B2F2;">
                    <img src="/uploads/avatars/{{Auth::user()->pimage}}" id="OpenCamera" style="height:150px;width:150px; margin-left:0px;border-radius: 50%;">
                   
                        <h6>Choose a different photo...</h6>
                        <form enctype="multipart/form-data" action="/profile" method="POST">
                            <input type="file" hidden="" name="avatar" id="imgupload">
                            
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            
                            <input type="submit" class=" btn btn-sm btn-primary" value="Save">
                        </form>
                    </div>
                </div>
            </div>
            <!-- edit form column -->
            <div class="col-md-8 personal-info">
                <h3>Personal info</h3>
                <form class="form-horizontal" role="form" method="POST" action="{{url("/edit/{$user->id}")}}">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Name:</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="name" type="text"  value="{{$user->name}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Date of Birth:</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="dateofbirth" type="date" value="{{$user->dateofbirth}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Email:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" value="{{$user->email}}" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Gender:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="gender" type="text" value="{{$user->gender}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Password:</label>
                        <div class="col-md-9">
                            <input class="form-control" type="password" placeholder="Enter your Password to save changes">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                            <input type="submit" class="btn btn-primary" value="Save Changes">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <span></span>
                            <input type="reset" class="btn btn-default" value="Cancel">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#OpenCamera').click(function(){ $('#imgupload').trigger('click'); });
</script>
@endsection