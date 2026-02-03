<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {

        // prendo i progetti con con with per il collegamento alla tabella types
        $projects = Project::with("type")->get();

        // dd($projects);

        return response()->json([
            "success" => true,
            "data" => $projects
        ]);
    }

    public function show(Project $project)
    {
        $project->load("type", "technologies");
        // dd($project);

        return response()->json([
            "sucess" => true,
            "data" => $project
        ]);
    }
}
