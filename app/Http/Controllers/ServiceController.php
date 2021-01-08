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
        $service->icon = $request->icon;
        $service->title = $request->title;
        $service->description = $request->description;
        $service->save();
        return back()->with('message','Service Saved Successfully!');
    }

    public function edit(Service $service, Request $request){

        $service->icon = $request->icon;
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
