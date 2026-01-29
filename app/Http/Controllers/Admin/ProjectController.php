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
    public function edit(Project $project)
    {
        // semplicemente mi porta alla view del form per modificare un progetto passando il progetto specifico
        return view("projects.edit", compact("project"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();
        // dd($data); // dati presi dal form
        // verifico se prendo i dati del progetto ceh voglio modificare
        // dd($project);

        // modifichiamo le informazione
        $project->name = $data["name"];
        $project->cliente = $data["cliente"];
        $project->periodo = $data["periodo"];
        $project->riassunto = $data["riassunto"];
        // dd($project->riassunto);

        $project->update(); // non salvo una nuova instanza ma modifico una già esistente

        // vado a vedere tramite la show quello appena creato con il reindirizzamento
        return redirect()->route("projects.show", $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        // dd($project); // verifico che ho passato il mio progetto da eliminare
        $project->delete();
        return redirect()->route("projects.index");
    }
}
