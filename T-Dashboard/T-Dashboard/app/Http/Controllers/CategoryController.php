<?php
namespace App\Http\Controllers\API;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\category;

class CategoryController extends Controller
{
    //
    public function store(Request $request)
    {
        $category = new category;
        $category->category_name = $request->input('category_name');
        // $category->category_img= $request->input('category_Image');
        if($request->hasFile('category_img'))
        {
            $file = $request->file('category_img');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('upload/category/', $filename);
            $category->category_img = $filename;
        }

        $category->save();
        return redirect()->back()->with('status','category Added Successfully');
    }

}
