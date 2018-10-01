<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;
class NoticesController extends Controller
{
    public function submit(Request $request){
        $this->validate($request,[
            'group'=>'required',
            'date'=> 'required',
            'notice'=> 'required'
        ]);


        $notice = new Notice;
        $notice->group = $request->input('group');
        $notice->date = $request->input('date');
        $notice->notice = $request->input('notice');
        $notice-> save();

        return redirect('/notice')->with('sucess','Notice Sent');
    }
    public function getMessages(){

        $notices =Notice::all();
        return view('welcome')->with('notic',$notices);
    }
}
