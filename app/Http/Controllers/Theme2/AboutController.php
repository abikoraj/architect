<?php

namespace App\Http\Controllers\Theme2;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\AboutUs;
use App\Models\Setting;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function list()
    {
        $about = AboutUs::all();
        return view('admin.about.index', compact('about'));
    }
    public function delete(AboutUs $about)
    {
        $about->delete();
        return back()->with('message', 'Deleted Successfully!');
    }
    public function edit(AboutUs $about, Request $request)
    {
        if ($request->getMethod() == "POST") {
            $about->title = $request->title;
            $about->desc = $request->desc;
            if (isset($request->img1)) {
                $about->image1 = $request->img1->store('aboutimg', 'public');
            }
            if (isset($request->img2)) {
                $about->image2 = $request->img2->store('aboutimg', 'public');
            }
            $about->multiple = isset($request->multiple) ? 1 : 0;
            $about->save();
            return redirect()->route('about.list')->with('message', 'Added Successfully!');
        } else {
            return view('admin.about.edit', compact('about'));
        }
    }
    public function add(Request $request)
    {
        if ($request->getMethod() == "POST") {
            // dd($request);
            $about = new AboutUs();
            $about->title = $request->title;
            $about->desc = $request->desc;
            if (isset($request->img1)) {
                $about->image1 = $request->img1->store('aboutimg', 'public');
            }
            if (isset($request->img2)) {
                $about->image2 = $request->img2->store('aboutimg', 'public');
            }
            $about->multiple = isset($request->multiple) ? 1 : 0;
            $about->save();
            return redirect()->route('about.list')->with('message', 'Added Successfully!');
        } else {
            return view('admin.about.add');
        }
    }

    public function setting(Request $request)
    {
        $setting = Setting::first();
        if ($setting == null) {
            $setting = Setting::create([]);
        }
        if ($request->getMethod() == "POST") {
            if (isset($request->logo)) {
                $setting->logo = $request->logo->store('setting', 'public');
            }
            if (isset($request->jumbotron)) {
                $setting->jumbotron = $request->jumbotron->store('setting', 'public');
            }
            if (isset($request->contact_cta_image)) {
                $setting->contact_cta_image = $request->contact_cta_image->store('setting', 'public');
            }
            if(isset($request->frontvideoimage)){
                $setting->frontvideoimage = $request->frontvideoimage->store('setting', 'public');

                
            }

            $setting->frontvideo=$request->frontvideo;
            $setting->contact_cta_title=$request->contact_cta_title;
            $setting->contact_cta_text=$request->contact_cta_text;
            $setting->frontabouttitle=$request->frontabouttitle;
            $setting->frontabouttext=$request->frontabouttext;
            $setting->fb=$request->fb;
            $setting->insta=$request->insta;
            $setting->twitter=$request->twitter;
            $setting->phone=$request->phone;
            $setting->email=$request->email;
            $setting->addr=$request->addr;
            $setting->mapurl=$request->mapurl;
            $setting->service_quote=$request->service_quote;
            $setting->contact_quote=$request->contact_quote;
            $setting->frontvideo=$request->frontvideo;

            $setting->save();
            return back()->with('message', 'Setting Saved Successfully!');
        
        } else {
            return view('admin.setting', compact('setting'));
        }
    }
}
