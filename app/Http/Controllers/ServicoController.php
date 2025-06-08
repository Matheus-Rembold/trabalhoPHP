<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicos = Servico::all();

        return view('servicos.index',compact('servicos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view(view: 'servicos.create') ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

      
        $data = $request->validate([
            'Nome'           =>'required|string|max:255',
            'Descricao'      =>'required|string|max:255',
            'Elevacar'       =>'required|string|max:255',
          
        ]);
      
        $servico = Servico::create($data);

        return redirect()->route('servicos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
          $servico = Servico::findOrFail($id);
       return view('servicos.show', ['servico' => $servico]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
          $servico = Servico::findOrFail($id);
        return view('servicos.edit', compact('servico'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $servico = Servico::findOrFail($id);
        $data = $request->validate([
            'Nome'           =>'required|string|max:255',
            'Descricao'      =>'required|string|max:255',
            'Elevacar'       =>'required|string|max:255',
          
        ]);

        $servico->update($data);


        return redirect()
            ->route('servicos.index')
            ->with('success', 'Servico atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $servico = Servico::findOrFail($id);
        
        $servico->delete();

        return redirect()
            ->route('servicos.index')
            ->with('success', 'Servico excluído com sucesso!');

    }
}
