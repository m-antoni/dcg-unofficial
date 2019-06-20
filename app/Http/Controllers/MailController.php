<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\sendMail;

class MailController extends Controller
{
    public function send(request $request)
    {
    
    	$request->validate([
    			'name' => 'required|max:50',
    			'email' => 'required|email',
    			'message' => 'required|max:100'
    	]);

    	Mail::send(new sendMail());

    	return redirect()->route('homepage');

		   // return Mail::send(['text'=>'mail'],['name', $request->name],function($message){
     //         $message->to('michaelantoni89@gmail.com','DC Group Of Companies')->subject('DC Group Contact');
     //         $message->from(request()->email, request()->name);
     //       	 $message->view(['msg' => request()->message]);
     //    });
    }
}
