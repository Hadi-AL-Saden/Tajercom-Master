<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class shop extends Controller
{
    
    public function shop()
    {   
        $product = DB::table('product')->select()->get();
        // dd($product);
        return view('shop',compact('product'));
        

    }


    public function item( $id)
    {   
        $item = DB::table('product')->select()->where('id',$id)->get();
        // dd($product);
        return view('detail',compact('item'));
        

    }
}
