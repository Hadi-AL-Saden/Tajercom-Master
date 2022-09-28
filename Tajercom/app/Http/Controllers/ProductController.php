<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   
        $category = DB::table('category')->select('id','category_name')->get();
        // dd($category);
        return view('product',compact('category'));
        

    }



    public function create()
    {
        return view('product');
    }

    public function store(Request $request)
    {
        $owner_phone = Auth::user()->phone_num;
        $product = new Product;
        $product-> owner_phone = $owner_phone;
        
        $owner = Auth::user()->name;
        $product-> owner = $owner;


        $product->catagory_name= $request->input('cat');
        $product->Product_name = $request->input('Product_name');
        // $product->Product_img = $request->input('Product_img');
        if($request->hasfile('Product_img'))
        {
            $file = $request->file('Product_img');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('upload/Product/', $filename);
            $product->Product_img = $filename;
        }
        $product->Product_price = $request->input('Product_price');
        $product->Product_dec = $request->input('Product_dec');
       
        $product->save();
        return redirect()->back()->with('status','Product Added Successfully');

        
    }

    

}

