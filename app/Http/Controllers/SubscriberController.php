<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function submit(Request $request){
        $this -> validate($request,[
           'email'=> 'required'
        ]);
          // Create New Message
       $subscriber=new Subscriber;
       $subscriber->email=$request->input('email');
      ;

       //Save Message

       $subscriber->save();
    //REdirect
    return redirect('/')->with('success','Message sent');

    }

    public function getMessages(){
        $subscribers = Subscriber::orderBy('created_at','desc')->get();


        return view('subscriber')->with('subscribers',$subscribers);
    }
}
