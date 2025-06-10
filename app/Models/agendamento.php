<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    protected $table = 'agendamentos';
    protected $fillable = ['servicos_id','mecanicos_id','carros_id','Dia_do_servico','Tempo_para_aprontar'];


    public function servico()
    {
        return $this->belongsTo(Servico::class); 

    }

    public function mecanico()
    {
        return $this->belongsTo(Mecanico::class); 

    }

    public function carro()
    {
        return $this->belongsTo(Carro::class); 

    }



}
