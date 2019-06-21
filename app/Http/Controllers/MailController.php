<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\sendMail;

class MailController extends Controller
{
    public function send(request $request)
    {
    	// validate the data
   //  	$request->validate([
			// 'name' => 'required|max:50',
			// 'email' => 'required|email',
			// 'message' => 'required|max:150'
   //  	]);

        $to_name = 'DC Group';
        $to_email = 'michaelantoni89@gmail.com';
        $from_email = $request->email;
        $from_name = $request->name;

        $data = array('name'=> $request->name, 'body' => $request->message, 'email' => $from_email);

        Mail::send('mail', $data, function($message) use ($to_name, $to_email, $from_email, $from_name) {
                    $message->to($to_email, $to_name)->subject('DC Group Contact Form');
                    $message->from($from_email, $from_name);
        });
    	
    	// Mail::send(new sendMail());

    	return redirect()->route('homepage');

			 // return Mail::send(['text'=>'mail'],['name', $request->name],function($message){
	   //           $message->to('michaelantoni89@gmail.com','DC Group Of Companies')->subject('DC Group Contact');
	   //           $message->from(request()->email, request()->name);
	   //         	 $message->view(['msg' => request()->message]);
	   //      });
    }
}
