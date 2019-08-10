<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\advertise;
use App\notice;

class homeController extends Controller
{
     public function index()
    {  
    	$ads = advertise::all();
    	$notices = notice::all();
        return view('index', compact(['ads','notices']));
    }
     
     public function about()
    {  
        return view('about');
    }
}
