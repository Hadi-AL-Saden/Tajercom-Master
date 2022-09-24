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
            return view('/index');
        }
        if($role==1){
            return view('admin.dashboard');
        }else{
            return view('admin.dashborad');
        }
    }

    public function category_Show(){
                $view1 = DB::table('sliders')->select('sliders_name','sliders_img','sliders_desc')->get();

        $view2 = DB::table('category')->select('category_name','category_img')->get();

        return view('/index',compact('view2','view1'));
    }
}
