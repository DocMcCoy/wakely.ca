<?php

namespace Wakely\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view('contact');
    }

    public function makeContact() {
        return view('contact');
    }


}
