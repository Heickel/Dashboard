<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;


class ProjectController extends Controller
{
    /**
     * Get project form
     * @method GET
     * @return view
     * @author Nihel Gharbi <gharbinihel1@gmail.com>
     */
    public function index()
    {   
        try{
        return view('projects.index');
        }catch(Exception $ex){
        Log::critical("create project error".$e->getMessage());
    }
    }
    /**
     * Get project form
     * @method GET
     * @return view
     * @author Nihel Gharbi <gharbinihel1@gmail.com>
     */
    public function create()
    {
        try{
            return view('projects.index');
        }catch(Exception $ex){
            Log::critical("create project error".$e->getMessage());
        }
    }

    /**
     * Save project
     * @method POST
     * @param Request $request
     * @return Response
     * @author Nihel Gharbi <gharbinihel1@gmail.com>
     */
    public function store(Request $request)
    {
        try{
            $request->validate([
                'name' => 'required|max:100',
                'code' => 'required',
            ]);           

           if(Project::create($request->all())){
               return redirect()->route('projects.index')->with('status', 'Projects Details Form Data Has Been inserted');
           }     
        }catch(Exception $e){
            Log::critical("message".$e->getMessage());
        }
    }
    /**
     * edit project
     * @method GET
     * @return view
     * @author Nihel Gharbi <gharbinihel1@gmail.com>
     */
    public function edit(Project $project)
    {
        try{        
        return view('projects.edit',compact('project'));
        }catch(Exception $e){
        Log::critical("edit project error".$e->getMessage());
        }
    }

    /**
     * Save project
     * @method PUT
     * @param Request $request , Project $project
     * @return Response
     * @author Nihel Gharbi <gharbinihel1@gmail.com>
     */
    public function update(Request $request, Project $project)
    {
        try{
            $request->validate([
                'name' => 'required|max:100',
                'code' => 'required',
            ]);
    
        if($project->update($request->all())){
            return redirect()->route('projects.index')->with('status', 'Projects Details Form Data Has Been updated');
        }     
        }catch(Exception $e){
                        Log::critical("message".$e->getMessage());
        }
    }
}

