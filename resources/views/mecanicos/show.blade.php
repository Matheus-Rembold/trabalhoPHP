<x-layouts.app>

<head>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>


  <div class="container">
    <h1>{{ $mecanico->Nome }}</h1>
   
    @if($mecanico->id)
      <p>ID:  {{ $mecanico->id }}</p>
    @endif



    <div class="form-actions">
      <a href="{{ route('mecanicos.create') }}" class="btn">Novo Mecanico</a>
      <a href="{{ route('mecanicos.index')}}"class="cancelar">Voltar</a>
    </div>
  </div>
</x-layouts.app>