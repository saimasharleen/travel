<?php

namespace App\Http\Controllers;
use App\Userinfo;
use Illuminate\Http\Request;
use App\advertise;

class uploadfileController extends Controller
{
	public function advertisement()
    {   $user = Userinfo::where('email',session('email'))->first();
        return view('superadmin.pages.advertisement',compact('user'));
    }
    public function store(Request $request)
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

        $adv  = new advertise([
            'image' => $name
        ]);
        $adv->save();

         return back();
        
    }

    }
}
