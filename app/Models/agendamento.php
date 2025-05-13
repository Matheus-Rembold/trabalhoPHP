<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class agendamento extends Model
{
    protected $table = 'carros';
    protected $fillable = ['servicos_id','Dia_do_servico','Tempo_para_aprontar'];

}
