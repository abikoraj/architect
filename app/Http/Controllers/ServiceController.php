<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('ourservices.index');
    }

    public function add()
    {
        return view('ourservices.add');
    }

    public function submit(Request $request)
    {
        $service = new Service();
        if (env('theme',"theme1")=="theme1"){

            $service->icon = $request->icon;
        }else{
            $service->icon = $request->icon->store('gallary','public');

        }
        $service->title = $request->title;
        $service->description = $request->description;
        $service->save();
        return back()->with('message','Service Saved Successfully!');
    }

    public function edit(Service $service, Request $request){

        if (env('theme',"theme1")=="theme1"){

            $service->icon = $request->icon??"";
        }
        // }else{
        //     if()
        //     $service->icon = $request->icon->store('gallary','public');

        // }
        // $service->icon = $request->icon;
        $service->title = $request->title;
        $service->description = $request->description;
        $service->save();
        return back()->with('message','Service Updated Successfully!');
    }

    public function delete(Service $service)
    {
        $service->delete();
        return back()->with('message','Service Deleted Successfully!');
    }
}
