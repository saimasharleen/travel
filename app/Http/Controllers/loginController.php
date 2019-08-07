<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class loginController extends Controller
{
       public function index(Request $request){

    	return view('login');
    }

    public function verify(Request $request){
    	
    	$email = $request->email;
    	$password = $request->input('password');
     
        $user = DB::table('userlogin')
                ->where('email', $email)
                ->where('password', $password)
                ->first();

		if($user != null){
            if($user->usertype == "superadmin"){
                $request->session()->put('email', $email);
    			return redirect()->route('superadmin.index');
            }
		}else{
			
			$request->session()->flash('message', 'Invalid email or password');
			return redirect()->route('login', ['email'=>$email]);
		}
    	
    }
}
