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
        $gallary = new Gallary();
        $gallary->picture=$request->picture->store('gallary','public');
        $gallary->category=$request->category;
        $gallary->save();
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
        $gallary->delete();
        return back()->with('message','Image Deleted Successfully!');
    }
}
