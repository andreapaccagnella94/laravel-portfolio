<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::all();
        return view("types.index", compact("types"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // semplicemente mi porta alla view del form per creare un nuovo Tipo
        return view("types.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // prendo i dati dalla Request
        $data = $request->all();
        // dd($data);

        // creo un istanza del modello e agiungo un nuovo record alla tabella con i dati presi dal form
        $newType = new Type();
        // dd($newType); // è un modello

        $newType->name = $data["name"];
        $newType->description = $data["description"];

        $newType->save();

        // reindirizzo alla show per vedere quello nuovo creato
        return redirect()->route("types.show", $newType);
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        return view("types.show", compact("type"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        // semplicemente mi porta alla view del form per modificare un Type passando il Type specifico
        return view("types.edit", compact("type"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type)
    {
        // salvo le info della Request
        $data = $request->all();
        // dd($data);
        // verifico se prendo i dati del progetto ceh voglio modificare
        // dd($type);

        // modifico le informazioni
        $type->name = $data["name"];
        $type->description = $data["description"];
        // dd($type->description);

        $type->update(); // non salvo una nuova instanza ma modifico una già esistente

        // vado a vedere tramite la show quello appena creato con il reindirizzamento
        return redirect()->route("types.show", $type);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        // dd($type); // verifico che ho passato il mio progetto da eliminare
        $type->delete();
        return redirect()->route("types.index");
    }
}
