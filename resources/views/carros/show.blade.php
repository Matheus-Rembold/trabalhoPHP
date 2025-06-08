<x-layouts.app>

<head>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>


  <div class="container">
    <h1>{{ $carro->Placa }}</h1>

    @if($carro->id)
      <p>Cliente ID:  {{ $carro->clientes_id }}</p>
    @endif

    @if($carro->Marca)
      <p>Marca:  {{ $carro->Marca}}</p>
    @endif

    @if($carro->Modelo)
      <p>MODELO:  {{ $carro->Modelo }}</p>
    @endif

    @if($carro->Ano)
      <p>ANO:  {{ $carro->Ano }}</p>
    @endif

     @if($carro->Motor)
      <p>MOTOR:  {{ $carro->Motor }}</p>
    @endif


    <div class="form-actions">
      <a href="{{ route('carros.create') }}" class="btn">Novo Carro</a>
      <a href="{{ route('carros.index')}}"class="cancelar">Voltar</a>
    </div>
  </div>
</x-layouts.app>