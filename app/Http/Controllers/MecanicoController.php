<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Fadaces\Auth;
use App\Models\Mecanico;


class MecanicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mecanicos = Mecanico::all();

        return view('mecanicos.index',compact('mecanicos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mecanicos.create') ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $data = $request->validate([
            'Nome'               =>'required|string|max:100'
        ]);
      
        $mecanico = Mecanico::create($data);

        return redirect()->route('mecanicos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $mecanico = Mecanico::findOrFail($id);
        return view('mecanicos.show', ['mecanico' => $mecanico]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $mecanico = Mecanico::findOrFail($id);
        return view('mecanicos.edit', compact('mecanico'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $mecanico = Mecanico::findOrFail($id);

        $data = $request->validate([ 
            'Nome'      => 'required|string|max:100'
        
        ]);

        $mecanico->update($data);

         return redirect()
            ->route('mecanicos.index')
            ->with('success', 'Mecanico atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mecanico = Mecanico::findOrFail($id);
        
      

        $mecanico->delete();

        return redirect()
            ->route('mecanicos.index')
            ->with('success', 'Mecanico excluído com sucesso!');

    }
}
