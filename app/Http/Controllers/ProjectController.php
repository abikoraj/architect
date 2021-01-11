<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('works.index');
    }

    public function add()
    {
        return view('works.add');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'image'=>'required|image|mimes:png,jpg,gif,svg',
            'title'=>'required',
            'description'=>'required'
        ]);
        $project = new Project();
        $project->title = $request->title;
        $project->description = $request->description;
        $project->image = $request->image->store('projects','public');
        $project->save();
        return back()->with('message','Project Added Successfull!');
    }

    public function edit(Project $project, Request $request)
    {
        $project->title = $request->title;
        $project->description = $request->description;
        // $project->image = $request->image->store('projects','public');
        $project->save();
        return back()->with('message','Project Updated Successfull!');
    }

    public function delete(Project $project)
    {
        $project->delete();
        return back()->with('message','Project Deleted Successfull!');
    }
}
