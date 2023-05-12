<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send (Request $request)
    {
        $mailData = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ];
         
        Mail::to('maurellehaya@gmail.com')->send(new ContactMail($mailData));
           
        dd("Email is sent successfully.");
    }


        //
}
