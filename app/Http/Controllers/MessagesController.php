<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    //
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' =>'required'

        ]);

        // create new message
        $message = new Message();
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');

        //save message
        $message->save();
         //redirect
        return redirect('/')->with('success' ,'Message sent');


    }
    public function index(){
        $messages = Message::all();
        return view('messages')->with('messages',$messages);
    }
}
