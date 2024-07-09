<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PubUserController extends Controller
{
    
    public function contact_us(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required',
        ]);

        $subject = "A person want to contact with you.";
        $body = 
        '
        Name : '.$request->name.'<br>
        Email : '.$request->email.'<br>
        Subject : '.$request->subject.'<br>
        Message : '.$request->message;
        Mail::to('contact@holyit.org')->send(new SendMail($subject, $body));

        return "OK";

    }

}

