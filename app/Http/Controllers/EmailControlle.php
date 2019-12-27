<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendEmail;
class EmailControlle extends Controller
{
    //

    public function index(){
    
        return view('Emailsendout/test');
    }
    public function post(Request $get){
       $this->validate($get,[
           "email"=>"required",
           "subject"=>"required",
           "message"=>"required",
       ]);
       
        $email = $get->email;
        $subject = $get->subject;
        $message = $get->message;
        
        Mail::to($email)->send( new SendEmail($subject,$message));
        // $req->validate([
        //     'email'=>'required',
        //     'subject'=>'required',
        //     'message'=>'required'
            
        // ]);

        // $data=[
        //     'email'=>$req->email,
        //     'subject'=>$req->subject,
        //     'bodymessage'=>$req->message,
        // ];
        // Mail::send('Emailsendout.mail',$data,function($message) use ($data){
        //     $message->from('peter790303@gmail.com','test');
        //     $message->to($data['email']);
        //     $message->subject($data['subject']);
        
        // });
        // return redirect()->back();
    }
}
