<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use Illuminate\Http\Request;

class AgendamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $agendamentos = Agendamento::all(); 

        return view('agendamentos.index',compact('agendamentos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view(view: 'agendamentos.create') ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'servicos_id'               =>'required|string|max:255|exists:servicos,id',
            'mecanicos_id'               =>'required|string|max:255|exists:mecanicos,id',
            'carros_id'               =>'required|string|max:255|exists:carros,id',
            'Dia_do_servico'          =>'required|string|max:255',
            'Tempo_para_aprontar'      =>'required|string|max:255',
        ]);
      
        $agendamento = Agendamento::create($data);

        return redirect()->route('agendamentos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $agendamento = Agendamento::findOrFail($id);
       return view('agendamentos.show', ['agendamento' => $agendamento]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Agendamento = Agendamento::findOrFail($id);
        return view('Agendamento.edit', compact('Agendamento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          $agendamento = Agendamento::findOrFail($id);
        $data = $request->validate([
            'servicos_id'               =>'required|string|max:255|exists:servicos,id',
            'mecanicos_id'               =>'required|string|max:255|exists:mecanicos,id',
            'carros_id'               =>'required|string|max:255|exists:carros,id',
            'Dia_do_servico'          =>'required|date|max:255',
            'Tempo_para_aprontar'      =>'required|time|max:255',
        ]);

        $agendamento->update($data);


        return redirect()
            ->route('agendamento.index')
            ->with('success', 'Agendamento atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
       $agendamento = Agendamento::findOrFail($id);
        
        $agendamento->delete();

        return redirect()
            ->route('agendamentos.index')
            ->with('success', 'Agendamento excluído com sucesso!');
    }
}
