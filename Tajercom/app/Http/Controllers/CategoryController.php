<?php
namespace App\Http\Controllers\API;

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

use App\Models\category;

class CategoryController extends Controller
{
    //




    public function index()
    {
        $fetch = category::all();
        return view('admin/category', compact('fetch'));
    }









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

    public function destroy($id)
    {
        $category = category::find($id);
        $category->delete();
        return redirect()->back()->with('status','Category Deleted Successfully');
    }
    
    public function edit($id)
    {
        $category = category::find($id);
        return view('admin.editCategory', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = category::find($id);
        $category->category_name = $request->input('category_name');
        $category->category_img = $request->input('category_img');
        if($request->hasFile('category_img'))
        {
            $file = $request->file('category_img');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('upload/category/', $filename);
            $category->category_img = $filename;
        }
 
        $category->update();
        return redirect()->back()->with('status','category Updated Successfully');
    }



    public function category_Show(){
        $view1 = DB::table('sliders')->select('id','sliders_name','sliders_img','sliders_desc')->get();

$view2 = DB::table('category')->select('category_name','category_img')->get();

$view3 = DB::table('product')->select()->get();

return view('/index',compact('view2','view1','view3'));
}

}
