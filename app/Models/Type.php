<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    // questa è la tabella principale/indipendente nella relazione 1 a molti
    // aggiunto il metodo projects con la funzione hasMany perchè appunto un type può essere in molti projects
    public function projects()
    {
        return $this->hasMany(Project::class); // recupero il modello Project per dire a cosa fa riferimento questo metodo
    }
}
