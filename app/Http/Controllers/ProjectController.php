<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;


class ProjectController extends Controller
{
    public function index()
    {
        return view('add-project-details-form.index');
    }
    
    public function create()
    {
        try{
        return view('add-project-details-form.index');
        }catch(Exception $ex){
        Log::critical("create project error".$e->getMessage());
        }
    }
    public function store(Request $request)
    {
        try{
            $request->validate([
                'name' => 'required|max:100',
                'code' => 'required',
            ]);           

           if(Project::create($request->all())){
               return redirect()->route('add-project-details-form.index')->with('status', 'Projects Details Form Data Has Been inserted');
           }     
        }catch(Exception $e){
            Log::critical("message".$e->getMessage());
        }
    }

    public function edit(Project $project)
    {
        try{        
        return view('add-project-details-form.edit',compact('project'));
        }catch(Exception $e){
        Log::critical("edit project error".$e->getMessage());
        }
    }


    public function update(Request $request, Project $project)
    {
        try{
            $request->validate([
                'name' => 'required|max:100',
                'code' => 'required',
            ]);
    
        if($project->update($request->all())){
            return redirect()->route('add-project-details-form.index')->with('status', 'Projects Details Form Data Has Been updated');
        }     
        }catch(Exception $e){
                        Log::critical("message".$e->getMessage());
        }
    }
}

