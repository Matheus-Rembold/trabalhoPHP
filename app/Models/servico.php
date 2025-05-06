<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class servico extends Model
{
    
        protected $table = 'servicos';
        protected $fillable = ['id','Descricao','Elevacar'];
    
}
