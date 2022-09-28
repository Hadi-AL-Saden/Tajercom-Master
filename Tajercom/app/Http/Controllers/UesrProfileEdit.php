<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class UesrProfileEdit extends Controller
{

    // public function index()
    // {
    //     $fetc = DB::table('users')->where('id', '{{Auth::user()->id }}')->get();
    //     return view('/userProfileEidt', compact('fetc'));
    // }

    // public function index()
    // {
    //     $fetc = User::where('id', '{{Auth::user()->id }}')->get();
    //     return view('/userProfileEidt', compact('fetc'));
        
    // }


    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone_num = $request->input('phone');
        $user->address = $request->input('address');
    
        $user->update();
        return redirect()->back()->with('status','Your Profil Has Been Updated Successfully');
    }



    
    public function update_image(Request $request, $id)
    {

        $user = User::find($id);

        $user->market_name = $request->input('market_name');

        if($request->hasfile('avatar'))
        {
            $file = $request->file('avatar');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('upload/avatar/', $filename);
            $user->avatar = $filename;
        }

        $user->save();
        $user->update();
        return redirect()->back()->with('status','Your Profil Has Been Updated Successfully');
    }

}
