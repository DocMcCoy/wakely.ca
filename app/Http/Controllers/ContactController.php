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
    
        Mail::send('emails.contact-message', [
            'msg' => $request->contactTextarea
        ], function ($mail) use ($request) {
            $mail->from($request->contactEmail, $request->contactName);
            $mail->to('david@wakely.ca')->subject('Contact Wakely Message');
        }
        );    

        // return view('contact#contact-form');

        return redirect()->back();
    }
}
