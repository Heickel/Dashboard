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

}

