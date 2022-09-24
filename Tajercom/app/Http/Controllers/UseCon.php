<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class UseCon extends Controller
{


    public function index() 
    {
        $fetch = DB::table('users')->where('role', '0')->get();
        return view('Admin/user', compact('fetch'));
    }




    public function edit($id)
    {
        $User = User::find($id);
        return view('admin/editUser', compact('User'));
    }

    public function update(Request $request, $id)
    {
        $User = User::find($id);
        $User->name = $request->input('name');
        $User->email = $request->input('email');
        $User->phone_num = $request->input('phone_num');
        $User->address = $request->input('address');
        // $User->avatar = $request->input('avatar');

        if($request->hasfile('avatar'))
        {
            $file = $request->file('avatar');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('upload/avatar/', $filename);
            $User->avatar = $filename;
        }
        $User->save();
        $User->update();
        
        return redirect()->back()->with('status','User Updated Successfully');
    }

    public function destroy($id)
    {
        $User = User::findOrFail($id);
        $User->delete();
        return redirect()->back()->with('status','User Deleted Successfully');
    }





}