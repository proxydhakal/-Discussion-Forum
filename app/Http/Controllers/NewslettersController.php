<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Newsletter;



class NewslettersController extends Controller
{
  public function store(Request $request){

  if ( ! Newsletter::isSubscribed($request->user_email) ) {

      Newsletter::subscribePending($request->user_email);
      return redirect('/')->with('sucess','Thanks for Subscription.!!');

  }
    return redirect('/')->with('sucess','You are already Subcribed!!');

}

}
?>
