<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hotelagentController extends Controller
{ 
	public function index(){
		return view('hotelagent.index');
	}
    
}
