<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    
        protected $table = 'clientes';
        protected $fillable = ['Nome','Telefone','CPF','Endereco'];
    
}
 