<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class EmailController extends Controller
{
    public function sendOtpViaEmail(Request $req){
        $user = Auth::user();
        $to_email= $user->email;
        $msg = "Congratulations!".$user->name."Your property is successfully posted";
        $data= array('name'=>$user->name, 'body'=>$msg);
        Mail::send('email.email', $data, function ($message) use ($to_email){
            $message->to($to_email);
            $message->subject('Hurray! Property posted');
        });
    }
}
