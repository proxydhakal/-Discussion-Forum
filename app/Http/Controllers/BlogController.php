<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Input;
use App\Blog;
use \Auth as A;
use Illuminate\Support\Facades\DB;
class BlogController extends Controller
{
public function index()
{
//
}
public function addblog(Request $request){
$this->validate($request,[
'title'=>'required',
'subtitle'=>'required',
'body'=>'required',
]);
$blog = new Blog;
$blog->title = $request->input('title');
$blog->subtitle = $request->input('subtitle');
$blog->body = $request->input('body');
$image =(Input::file('image'));
$blog ->user_id =auth()->id();
$image_name = $image->getClientOriginalName();
$storage ='uploads/blogs';
$image->move($storage,$image_name);
$blog->image =$image_name;
$blog-> save();
return redirect('/add/blog')->with('sucess','Blog Added Successfully');
}
public function getBlogs(){
// $posts = $post->where("user_id", "=",Auth::user()->id)->get();
//$data = Blog::paginate(3);
if(\Auth::check()){
    $data = DB::table('blogs')->select(DB::raw('blogs.id as blog_id'),DB::raw('blogs.created_at as time'),'title', 'subtitle','body','user_id', 'image',DB::raw('users.id as users_id'),DB::raw('users.name as user_name'),DB::raw('users.pimage as propic'))->join('users', 'users.id', '=', 'blogs.user_id')->orderBy('time', 'desc')->paginate(3);
//printf($data);
return view('/blog',['blogs'=> $data]);

}
else{
return view('/unauthorized');
}
}
public function getBlog($post_id){
$posts =Blog::where("id", "=",$post_id)->get();
return view('/forum',['blogs'=> $posts]);
}
public function search() {
$query =  Input::get('query');
$questions = Blog::search($query);
return view('search')->with('questions', $questions)->with('page_title','Search')->with('query',$query);
}
public function delBlog($id){
$blogs = Blog::where('id',$id);
$blogs->delete();
return redirect('/blog')->with('sucess','Delete Sucessfully');
}

public function editBlog(Request $request,$id){
$this->validate($request, [
'title' => 'required|string|max:255',
'subtitle' => 'required|string|max:255',
'body' => 'required',
]);
$blogs = new Blog;
$blogs->title = $request->input('title');
$blogs->subtitle = $request->input('subtitle');
$blogs->body = $request->input('body');
$data = array(
'title'=>$blogs->title,
'subtitle'=>$blogs->subtitle,
'body'=>$blogs->body,
);
Blog::where('id',$id)->update($data);
$blogs->update();
return redirect('/blog')->with('sucess','Blog Updated Successful');
}
}