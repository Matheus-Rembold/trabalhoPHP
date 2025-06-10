<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;
use App\Models\Cliente;

class CarroController extends Controller
{
    /**
     * Display a listing of the resource. 
     */
    public function index()
    {
        $carros = Carro::all(); 

        return view('carros.index',compact('carros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::all();
        return view('carros.create', compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          

       $data = $request->validate([
            'clientes_id'     =>'required|string|max:255|exists:clientes,id',
            'Placa'           =>'required|string|max:255',
            'Marca'           =>'required|string|max:255',
            'Modelo'          =>'required|string|max:255',
            'Ano'             =>'required|string|max:255',
            'Motor'           =>'required|string|max:255',
        ]);
      
        $carro = Carro::create($data);

        return redirect()->route('carros.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $carro = Carro::findOrFail($id);
       return view('carros.show', ['carro' => $carro]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
          $carro = Carro::findOrFail($id);
        return view('carros.edit', compact('carro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $carro = Carro::findOrFail($id);
        $data = $request->validate([
            'clientes_id'               =>'required|string|max:255|exists:clientes,id',
            'Placa'           =>'required|string|max:255',
            'Marca'                =>'required|string|max:255',
            'Modelo'           =>'required|string|max:255',
            'Ano'           =>'required|string|max:255',
            'Motor'           =>'required|string|max:255',
        ]);

        $carro->update($data);


        return redirect()
            ->route('carros.index')
            ->with('success', 'Carro atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $carro = Carro::findOrFail($id);
        
        $carro->delete();

        return redirect()
            ->route('carros.index')
            ->with('success', 'Carro excluído com sucesso!');

    }
}
