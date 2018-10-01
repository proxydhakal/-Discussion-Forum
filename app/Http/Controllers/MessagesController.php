<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
class MessagesController extends Controller
{ public function index()
    {
         return view('/notice');
    }
    public function submit(Request $request){
    	$this->validate($request,[
         'name'=>'required',
         'email'=> 'required'
    	]);


    	$message = new Message;
    	$message->name = $request->input('name');
    	$message->email = $request->input('email');
    	$message->message = $request->input('message');
    	$message-> save();

    	return redirect('/contact')->with('sucess','Message Sent');
    }
    public function getMessages(){

    	$messages =Message::all();
   return view('message')->with('message',$messages);
    }
    public function delMessages($id){

        $messages = Message::where('id',$id);

        $messages->delete();
        return redirect('/message')->with('sucess','Delete Sucessfully');
    }
}
