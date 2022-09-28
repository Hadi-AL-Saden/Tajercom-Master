<?php

namespace App\Http\Controllers;
use App\Models\Sliders;

use Illuminate\Http\Request;

class SlidersController extends Controller
{
    //

    public function index()
    {
        $sliders = Sliders::all();
        return view('admin/sliders', compact('sliders'));
    }




    public function create()
    {
        return view('sliders.create');
    }

    public function store(Request $request)
    {
        $sliders = new Sliders ;
        $sliders->sliders_name = $request->input('sliders_name');
        $sliders->sliders_desc = $request->input('sliders_desc');
        // $sliders->email = $request->input('email');

        if($request->hasfile('sliders_img'))
        {
            $file = $request->file('sliders_img');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('upload/sliders/', $filename);
            $sliders->sliders_img = $filename;
        }

        $sliders->save();
        return redirect()->back()->with('status','Sliders Added Successfully');
    }
    public function destroy($id)
    {
        $sliders = Sliders::find($id);
        $sliders->delete();
        return redirect()->back()->with('status','sliders Deleted Successfully');
    }
}
