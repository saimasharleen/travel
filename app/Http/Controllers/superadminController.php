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

   /* if(session('email') == null){
           return redirect()->route('login.index');
        }
    else{

         return view('superadmin.index');
        }
*/
         
    public function index(){
    if(session('email') == null){
           return redirect()->route('login');
        }
    else{

         return view('superadmin.index');
        }
    }
    public function signup()
    {
        if(session('email') == null){
           return redirect()->route('login');
        }
    else{

         return view('superadmin.pages.signup');
        }
         
    }
    
    public function b2bagentlist()
    {   if(session('email') == null){
           return redirect()->route('login');
        }
    else{

         return view('superadmin.pages.b2bagentlist');
        }
         
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
        $user -> deposit    = $request->deposit; 
        $user ->save();
        
        $userlogin = new login();
        $userlogin -> email         = $request->email;
        $userlogin -> password      = $request->password; 
        $userlogin -> usertype      = $request->usertype;         
        $userlogin ->save();

        return redirect()->route('signup')->with('message','registered successfully');;
    }
    
    public function noticeindex()
    {   if(session('email') == null){
           return redirect()->route('login');
        }
    else{

        return view('superadmin.pages.notice');
        }
        
    }
    
     public function noticestore(Request $request)
    {
        $this->validate($request, [
            'postd'=>'Required'
        ]);
        $user = new notice();
        $user -> postd     = $request->postd;
        $user ->save();


        return redirect()->route('notice')->with('message','notice added successfully');;
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
    
     public function uploadstore(Request $request)
    {
        $this->validate($request, [
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        //$this->save();

        $adv  = new userinfo([
            'image' => $name
        ]);
        $adv->save();

         return back();
        
    }
}

    public function profile()
    {   
        //dd(session('email')); 
        $user = Userinfo::where('email',session('email'))->first();
        $userlogin = login::where('email',session('email'))->first();
        //dd($user);
       return view('superadmin.pages.profile',compact(['user','userlogin']));
    }
    public function updateProfile(Request $request)
    {
        $this->validate($request, [
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        //$this->save();

/*        $adv  = new Userinfo([
            'img' => $name
        ]);*/
/*        $adv::where('email',session('email'))->update();
*/    

        DB::table('user')
            ->where('email', session('email'))
            ->update(['img' => $name]);

         return back();
        

    }
    
    }

     public function editprofilestore(Request $request)
    {
         $this->validate($request, [
            'firstname'=>'Required',
            'lastname'=>'Required',
            'username'=>'Required',
            'contactno'=>'Required',
            'cname'=>'Required',
            'city'=>'Required',
            'address'=>'Required',
            'postalcode'=>'Required',
        ]);

        $user = Userinfo::where('email',session('email'))->first();
        $user->firstname = $request->get('firstname');
        $user->lastname = $request->get('lastname');
        $user->username = $request->get('username');
        $user->cname = $request->get('cname');
        $user->contactno = $request->get('contactno');
        $user->city = $request->get('city');
        $user->address = $request->get('address');
        $user->postalcode = $request->get('postalcode');
        $user->update();

    }
     public function forgetpassword()
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
