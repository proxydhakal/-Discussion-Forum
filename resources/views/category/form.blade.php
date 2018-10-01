<form method="POST" action="">
  <div class="form-group">
    @csrf
    
    <label for="exampleInputEmail1">Title:</label>
    <input type="text" class="form-control" value="{{$blog->title}}" id="title" name="title">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Sub Title</label>
    <input type="text" class="form-control" value="{{$blog->subtitle}}" name="subtitle">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Content:</label>
    <textarea  type="text" class="form-control" rows="10" value="{{!! $blog->body!!}}" name=""></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Save Changes</button>
</form>