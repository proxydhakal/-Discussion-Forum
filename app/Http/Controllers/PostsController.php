<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use Auth;
use Illuminate\Support\Facades\Input;
use App\Post;

class PostsController extends Controller
{
    public function submit(Request $request){
        $this->validate($request,[
            'messegeText'=>'required',
            



        ]);


        $post = new Post;
        $post->messegeText = $request->input('messegeText');
        $image =(Input::file('messegeImage'));
        $post ->user_id =auth()->id();
        $image_name = $image->getClientOriginalName();
        $storage ='uploads/posts';
        $image->move($storage,$image_name);
        $post->messegeImage =$image_name;
       
        $post-> save();

       return redirect('/home')->with('sucess','Post Successfully');
    }

      public function delPost($post_id){

        $posts = Post::where('id',$post_id);

        $posts->delete();
        return redirect('/home')->with('sucess','Delete Sucessfully');
    }

}
