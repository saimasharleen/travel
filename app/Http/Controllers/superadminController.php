<?php

namespace App\Http\Controllers;

use DB; 
use App\Userinfo;
use App\login;
use App\notice;
use Illuminate\Http\Request;

class superadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('superadmin.index');
    }
    public function signup()
    {
         return view('superadmin.pages.signup');
    }
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname'=>'Required',
            'lastname'=>'Required',
            'username'=>'Required',
            /*'email'=>'Required',*/
            'password'=>'Required',
            'cpassword'=>'Required',
            'usertype'=>'Required',
            'cname'=>'Required',
            'licenseno'=>'Required',
            'contactno'=>'Required',
            'city'=>'Required',
            'address'=>'Required',
            'postalcode'=>'Required'
        ]);
        $user = new userinfo();
        $user -> firstname     = $request->firstname;
        $user -> lastname      = $request->lastname;
        $user -> username      = $request->username;
        $user -> email         = $request->email;
        /*$user -> password      = $request->password;
        $user -> cpassword     = $request->cpassword;*/
        $user -> usertype      = $request->usertype;
        $user -> cname         = $request->cname;
        $user -> licenseno     = $request->licenseno;
        $user -> contactno     = $request->contactno;        
        $user -> city          = $request->city;      
        $user -> address       = $request->address;   
        $user -> postalcode    = $request->postalcode;            
        $user ->save();
        
        $userlogin = new login();
        $userlogin -> email         = $request->email;
        $userlogin -> password      = $request->password; 
        $userlogin -> usertype      = $request->usertype;         
        $userlogin ->save();

        return redirect()->route('login');
    }
    
    public function noticeindex()
    {
        return view('superadmin.pages.notice');
    }
    
     public function noticestore(Request $request)
    {
        $this->validate($request, [
            'postd'=>'Required'
        ]);
        $user = new notice();
        $user -> postd     = $request->postd;
        $user ->save();
        return redirect()->route('notice');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Userinfo  $userinfo
     * @return \Illuminate\Http\Response
     */
    public function show(Userinfo $userinfo)
    {
        //
    }

    public function profile()
    {
        return view('superadmin.pages.profile');
    }

     public function editprofile()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Userinfo  $userinfo
     * @return \Illuminate\Http\Response
     */
    public function edit(Userinfo $userinfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Userinfo  $userinfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Userinfo $userinfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Userinfo  $userinfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Userinfo $userinfo)
    {
        //
    }
}
