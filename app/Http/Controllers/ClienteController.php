<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Fadaces\Auth;
use App\Models\Cliente;

class ClienteController extends Controller 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();

        return view('clientes.index',compact('clientes'));
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('clientes.create') ;

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'Nome'               =>'required|string|max:100',
            'Telefone'           =>'required|string|max:15',
            'CPF'                =>'required|string|max:11',
            'Endereco'           =>'required|string|max:100',
        ]);
      
        $cliente = Cliente::create($data);

        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        
        $cliente = Cliente::findOrFail($id);
        return view('clientes.show', ['cliente' => $cliente]);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente = Cliente::findOrFail($id);

        $data = $request->validate([ 
            'Nome'      => 'required|string|max:100',
            'Telefone' =>  'required|string|max:15',
            'CPF'  =>   'required|string|max:11',
            'Endereco' =>  'required|string|max:100'
        ]);

        $cliente->update($data);


        return redirect()
            ->route('clientes.index')
            ->with('success', 'Cliente atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        
      

        $cliente->delete();

        return redirect()
            ->route('clientes.index')
            ->with('success', 'Cliente excluído com sucesso!');

    }
}
