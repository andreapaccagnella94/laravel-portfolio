<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        // dd($projects);
        return view("projects.index", compact("projects"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // semplicemente mi porta alla view del form per creare un nuovo progetto
        return view("projects.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data); dati presi dal form

        // creo un instanza dal modello e la popolo con i dati arrivati dal form
        $newProject = new Project();
        // dd($newProject); // modello

        $newProject->name = $data["name"];
        $newProject->cliente = $data["cliente"];
        $newProject->periodo = $data["periodo"];
        $newProject->riassunto = $data["riassunto"];

        $newProject->save();

        // reindirizzo alla show del nuovo progetto creato e salvato nel db
        return redirect()->route("projects.show", $newProject);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view("projects.show", compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
