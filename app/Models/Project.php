<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // questa è la tabella secondaria/dipendente
    // aggiunto il metodo type con la funzione belongsTo perchè appunto un project può avere solo un type
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
