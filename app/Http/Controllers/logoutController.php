<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logoutController extends Controller
{
    public function index(Request $request){

    	$request->session()->flush();
    	return redirect('/signin');
    }
}
