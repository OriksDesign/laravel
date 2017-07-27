<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
    //
    public function index()
    {
    	$message='Hello World!'.;
    	return view('page')->with('message', $message);
    }
}
