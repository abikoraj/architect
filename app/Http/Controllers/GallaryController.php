<?php

namespace App\Http\Controllers;

use App\Models\Gallary;
use Illuminate\Http\Request;

class GallaryController extends Controller
{
    public function index()
    {
        return view('portfolio.index');
    }
    public function add()
    {
        return view('portfolio.add');
    }

    public function submit(Request $request)
    {
        foreach ($request->images as  $image) {
            
            $gallary = new Gallary();
            $gallary->picture=$image->store('gallary','public');
            $gallary->category=$request->caption;
            $gallary->save();
        }
        return back()->with('message','Image Saved Successfully!');
    }

    public function edit(Gallary $gallary, Request $request)
    {
        // dd($request);
        $gallary->category = $request->category;
        $gallary->save();
        return back()->with('message','Image Updated Successfully!');

    }
    public function delete(Gallary $gallary)
    {
        $id=$gallary->id;
        $gallary->delete();
        return response()->json(['id'=>$id]);
    }
}
