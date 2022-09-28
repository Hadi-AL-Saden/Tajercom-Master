<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class navController extends Controller
{
    public function category_Show(){
       

$list = DB::table('category')->select('category_name','category_img')->get();



return view('layout/nav',compact('list',));
}}
