<?php

namespace Wakely\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
    
    

class GoBackController extends Controller
{
    public function goBack()
    {
        return view('splash');
    }
}
