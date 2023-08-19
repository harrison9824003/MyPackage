<?php

namespace Virtualorz\Hello;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    //

    public function index()
    {
        $message = 'Hello World';
        return view('Hello::welcome', compact('message'));
    }
}
