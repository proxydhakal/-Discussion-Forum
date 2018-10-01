<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Auth;
use Image;

class UserController extends Controller
{
    public function profile(){
        return view('/profile',array('user'=>Auth::user()));
    }
    public function update_avatar(Request $request){
      if($request->hasFile('avatar')){
          $avatar = $request->file('avatar');
          $filename =time().'.'.$avatar->getClientOriginalExtension();
          Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/'.$filename));
          $user = Auth::user();
          $user->pimage=$filename;
          $user->update();
      }
        return view('/profile',array('user'=>Auth::user()))->with('sucess','Profile Updated');
    }
    public function updateProfile(Request $request,$id){
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'dateofbirth' => 'required|string|max:255',

        ]);
        $users = new User;
        $users->name = $request->input('name');
        $users->gender = $request->input('gender');
        $users->dateofbirth = $request->input('dateofbirth');
        $data = array(
            'name'=>$users->name,
            'gender'=>$users->gender,
            'dateofbirth'=>$users->dateofbirth,
        );
        User::where('id',$id)->update($data);
        $users->update();
        return redirect('/profile')->with('sucess','Profile Updated Successful');
    }
}
