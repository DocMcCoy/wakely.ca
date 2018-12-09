<?php

namespace Wakely\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view('contact');
    }

    public function makeContact(Request $request) 
    {
        $this->validate($request, [
            'contactName' => 'required',
            'contactEmail' => 'required|email',
            'contactTextarea' => 'required'
        ]);
        
        Mail::send('emails.contact-messge', [
            'msg' => $request->contactTextarea
        ], function ($mail) use ($request) {
            $mail->from($request->contactEmail, $request->contactName);
            $mail->to('david@wakely.ca')->subject("You've got a message from Wakely.ca");
        });
        
        // dd($request->all());

        return redirect()->back()-with('flash_message', "Thanks for contacting me!" );
    }
}
