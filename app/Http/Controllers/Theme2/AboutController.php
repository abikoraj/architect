<?php

namespace App\Http\Controllers\Theme2;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function list(){
        $about=AboutUs::all();
        return view('admin.about.index',compact('about'));
    }
    public function delete(AboutUs $about){
        $about->delete();
        return back()->with('message','Deleted Successfully!');
    }
    public function edit(AboutUs $about,Request $request){
        if($request->getMethod()=="POST"){
            $about->title=$request->title;
            $about->desc=$request->desc;
            if(isset($request->img1)){
                $about->image1=$request->img1->store('aboutimg','public');
            }
            if(isset($request->img2)){
                $about->image2=$request->img2->store('aboutimg','public');
            }
            $about->multiple=isset($request->multiple)?1:0;
            $about->save();
            return redirect()->route('about.list')->with('message','Added Successfully!');

        }else{
            return view('admin.about.edit',compact('about'));

        }
      
    }
    public function add(Request $request){
        if($request->getMethod()=="POST"){
            // dd($request);
            $about=new AboutUs();
            $about->title=$request->title;
            $about->desc=$request->desc;
            if(isset($request->img1)){
                $about->image1=$request->img1->store('aboutimg','public');
            }
            if(isset($request->img2)){
                $about->image2=$request->img2->store('aboutimg','public');
            }
            $about->multiple=isset($request->multiple)?1:0;
            $about->save();
            return redirect()->route('about.list')->with('message','Added Successfully!');

        }else{
            return view('admin.about.add');
        }
    }
}
