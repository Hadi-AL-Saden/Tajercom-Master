<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductAdminCcontroller extends Controller
{
    //
    public function index()
    {
        $product = Product::all();
        return view('admin/item', compact('product'));
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back()->with('status','product Deleted Successfully');
    }
}
