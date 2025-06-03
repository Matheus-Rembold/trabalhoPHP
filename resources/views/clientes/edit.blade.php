<x-layouts.app :title="__('Editar Cliente')" :dark-mode="auth()->user()->pref_dark_mode">

<head>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

  <div class="container">
    <h1>Editar Clientes</h1>

    <form action="{{ route('clientes.update', $cliente) }}" method="POST">
      @csrf
      @method('PUT')

    

      <div style="margin-top:1em;">
        <label for="Nome">Nome</label><br>
        <textarea
          name="Nome"
          id="Nome"
          rows="4"
        
        >{{ old('Nome', $cliente->Nome) }}</textarea>
      </div>


      <div style="margin-top:1em;">
        <label for="Telefone">Telefone</label><br>
        <textarea
          name="Telefone"
          id="Telefone"
          rows="4"
        >{{ old('Telefone', $cliente->Telefone) }}</textarea>
      </div>

      <div style="margin-top:1em;">
        <label for="CPF">CPF</label><br>
        <textarea
          name="CPF"
          id="CPF"
          rows="4"
        >{{ old('CPF', $cliente->CPF) }}</textarea>
      </div>


      <div style="margin-top:1em;">
        <label for="Endereco">Endereço</label><br>
        <textarea
          name="Endereco"
          id="Endereco"
          rows="4"
        >{{ old('Endereco', $cliente->Endereco) }}</textarea>
      </div>




      <div style="margin-top:1em;">
        <button type="submit" 
       
        >Atualizar</button>

      
        <a href="{{ route('clientes.index', $cliente) }}" class="cancelar">Cancelar</a>


      </div>
    </form>
  </div>
</x-layouts.app>
