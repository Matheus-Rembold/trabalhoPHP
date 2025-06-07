<x-layouts.app>

<head>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>


  <div class="container">
    <h1>{{ $cliente->Nome }}</h1>
   
    @if($mecanico->id)
      <p>ID:  {{ $mecanicos->id }}</p>
    @endif



    <div class="form-actions">
      <a href="{{ route('clientes.create') }}" class="btn">Novo Cliente</a>
      <a href="{{ route('clientes.index')}}"class="cancelar">Voltar</a>
    </div>
  </div>
</x-layouts.app>