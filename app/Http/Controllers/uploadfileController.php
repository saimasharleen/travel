<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\advertise;

class uploadfileController extends Controller
{
	public function advertisement()
    {
        return view('superadmin.pages.advertisement');
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
