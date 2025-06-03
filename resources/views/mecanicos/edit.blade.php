<x-layouts.app :title="__('Editar Mecanico')" :dark-mode="auth()->user()->pref_dark_mode">

<head>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

  <div class="container">
    <h1>Editar Mecanicos</h1>

    <form action="{{ route('mecanicos.update', $mecanico) }}" method="POST">
      @csrf
      @method('PUT')

      <div style="margin-top:1em;">
        <label for="Nome">Nome</label><br>
        <textarea
          name="Nome"
          id="Nome"
          rows="4"
        >{{ old('Nome', $mecanico->Nome) }}</textarea>
      </div>


      <div style="margin-top:1em;">
        <button type="button" 
        class = "atualizar"
        >Atualizar</button>

      
        <a href="{{ route('mecanicos.index', $mecanico) }}" class="cancelar">Cancelar</a>


      </div>
    </form>
  </div>
</x-layouts.app>
