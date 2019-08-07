<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use App\Mail\SendEmail;
class MailController extends Controller
{
    public function home(){
        // dd($req->message);
     return view('superadmin.pages.mail');
    }

    public function sendemail(Request $get){
    	$this->validate($get,[
    	  "email"   => "required",
    	  "subject" => "required",
    	  "message" => "required",
    	]);
    
    	$email = $get->email;
    	$subject = $get->subject;
    	$message = $get->message;
          // dd([$message,$subject]);

        //echo $message;
    	Mail::to($email)->send(new SendEmail($subject, $message));
    	Session::flash("Success");
    	return back();
    } 
}
