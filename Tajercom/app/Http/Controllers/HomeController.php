<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role= Auth::user()->role;

        if($role==0){
            return view('/userProfiles');
        }
        if($role==1){
            return view('admin.dashboard');
        }else{
            return view('admin.dashboard');
        }
    }





    // public function index()
    // {
    //     $email= Auth::user()->email;
    //     $pass= Auth::user()->password;

    //     if($email==='admin@admin.com' && $pass==='hadidota2'){
    //         return view('admin.profile');
    //     }
       
    //     else{
    //         return view('/index');
    //     }
    // }
}
