<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\advertise;
use App\notice;
use App\gallery;

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
     public function blog()
    {  
        return view('blog');
    }
    public function contacts()
    {  
        return view('contacts');
    }
    public function tours()
    {  
        return view('tours');
    }
    public function gallery()
    {   $gals = gallery::all();
        return view('gallery',compact('gals'));
    }
}
