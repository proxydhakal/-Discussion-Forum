@extends('layouts.app')
@section('forum')
<div class="shadow-md mb-5 rounded" style="background-image: url('/assets/blog.jpg');background-size:cover;
    background-position: 50% 50%;">
    <h1 style="color: #091324;">Blog</h1>
    <hr>
    <div class="row">
        <!-- left column -->
        <div class="col-md-4">
            <div class="text-center">
                <img src="/uploads/avatars/{{Auth::user()->pimage}}" id="OpenCamera" style="height:150px;width:150px; margin-right:25px;border-radius: 50%;">
                
            </div>
        </div>
        <!-- edit form column -->
        <div class="col-md-8 personal-info">
            <h3  style="color: #091324;">Create your own Blog</h3>
            <form class="form-horizontal" role="form" method="POST" action="/addpost" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="col-lg-3 control-label"  style="color: #091324;">Blog Title:</label>
                    <div class="col-lg-8">
                        <input class="form-control" name="title" type="text" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label"  style="color: #091324;">Sub Title:</label>
                    <div class="col-lg-10">
                        <input class="form-control" name="subtitle" type="textarea"  rows="2" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label"  style="color: #091324;">Picture:</label>
                    <div class="col-lg-6">
                        <input class="form-control" type="file"  name="image"><p style="color: #091324;">*File size < 2048kb</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label"  style="color: #091324;">Content:</label>
                    <div class="col-lg-12">
                        <textarea  id="summernote"  name="body" class="form-control"></textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-8">
                        <input type="submit" class="btn btn-primary" value="Post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <span></span>
                        <input type="reset" class="btn btn-default" onclick="this.form.reset();" value="Cancel">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
 <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({
  selector: 'textarea',
  height: 400,
  menubar: true,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks advcode fullscreen',
    'insertdatetime media table contextmenu powerpaste tinymcespellchecker a11ychecker linkchecker mediaembed',
    'wordcount'
  ],
  toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | advcode spellchecker  a11ycheck code',
  table_toolbar: "tableprops cellprops tabledelete | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol",
  powerpaste_allow_local_images: true,
  powerpaste_word_import: 'prompt',
  powerpaste_html_import: 'prompt',
  spellchecker_language: 'en',
  spellchecker_dialog: true,
    entity_encoding : "raw",
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css']
});</script>
@endsection