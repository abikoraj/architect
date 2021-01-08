<?php

namespace App\Http\Controllers;

use App\Models\Herocarousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    public function index()
    {
        $data = Herocarousel::all();
        return view('carousels.add', ['list' => $data]);
    }

    public function submit(Request $request)
    {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,gif,svg',
            'title' => 'required',
            'description' => 'required',
            'btn_title' => 'required',
            'btn_link' => 'required'
        ]);

        $carousel = new Herocarousel();
        $carousel->image = $request->image->store('data', 'public');
        $carousel->title = $request->title;
        $carousel->description = $request->description;
        $carousel->btn_title = $request->btn_title;
        $carousel->btn_link = $request->btn_link;
        $carousel->save();
        return back()->with('message','Carousel Added Successfully!');
    }

    public function edit(Herocarousel $carousel, Request $request)
    {
        if ($request->getMethod() == 'POST') {
            if($request->filled('image')){
                $carousel->image = $request->image->store('data', 'public');
            }
            $carousel->title = $request->title;
            $carousel->description = $request->description;
            $carousel->btn_title = $request->btn_title;
            $carousel->btn_link = $request->btn_link;
            $carousel->save();
            return redirect()->route('carousel.add')->with('message','Carousel Updated Successfully!');
        }else {
            return view('carousels.edit',['item'=>$carousel]);
        }
    }

    public function delete(Herocarousel $carousel)
    {
        $carousel->delete();
        return back()->with('message','Carousel Deleted Successfully!');
    }
}
