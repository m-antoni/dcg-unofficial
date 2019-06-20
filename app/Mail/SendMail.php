<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    // public function build()
    // {
    //     return $this->view('view.name');
    // }
    public function build(request $request)
    {
        // return $this->view('mail',[
        //     'msg' => $request->message
        // ])->to($request->to);

        // return dd($this->view('mail'));
                
        return $this->view('mail',[
                            'name' => $request->name,
                            'msg' => $request->message, 
                            'email' => $request->email
                        ])->to('michaelantoni89@gmail.com')->from($request->email)
                          ->subject('DC Group Contact Form');

                      
                         
    }
}
