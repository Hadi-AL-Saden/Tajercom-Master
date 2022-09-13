<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $view1 = DB::table('sliders')->select('sliders_name','sliders_img','sliders_desc')->get();

        $view2 = DB::table('category')->select('category_name','category_img')->get();

        return view('/index',compact('view2','view1'));

    }
}
