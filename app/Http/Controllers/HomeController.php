<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Post;
use App\Question;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    { 
        return view('home');
    }
    public function getPosts( Post $post){
        // $posts = $post->where("user_id", "=",Auth::user()->id)->get();
        $data = DB::table('posts')->select(DB::raw('posts.id as post_id'),DB::raw('posts.created_at as time'),'messegeText', 'messegeImage',DB::raw('users.id as users_id'),DB::raw('users.name as user_name'),DB::raw('users.pimage as propic'))->join('users', 'users.id', '=', 'posts.user_id')->get();
         $ques =Question::all();
         return view('/home')->with('posts', $data)->with('queans',$ques);
        // return view('/home' , compact('posts'));
       }
      
}
