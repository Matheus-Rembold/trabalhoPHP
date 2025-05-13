<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class carro extends Model
{
    
        protected $table = 'carros';
        protected $fillable = ['clientes_id','Placa','Marca','Modelo','Ano','Motor'];
    
    
}

