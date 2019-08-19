<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userinfo;
use App\gallery;

class galleryController extends Controller
{
    public function gallery()
    {   $user = Userinfo::where('email',session('email'))->first();
        return view('hotelagent.gallery',compact('user'));
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

        $gal  = new gallery([
            'image' => $name
        ]);
        $gal->save();

         return back();
        
    }

    }
}
