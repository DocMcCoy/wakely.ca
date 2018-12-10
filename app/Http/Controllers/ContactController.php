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
            'person' => $request->contactName,
            'address' => $request->contactEmail,
            'msg' => $request->contactTextarea,
            ], function ($mail) use ($request) {
            $mail->from('admin@wakely.ca', 'Wakely.ca Administrator');
            $mail->to('david@wakely.ca')->subject('Message from the Wakely.ca Contact Form');
        }
        );    

        // return view('contact#contact-form');

        return redirect()->back()->with('success', true);
    }
}
