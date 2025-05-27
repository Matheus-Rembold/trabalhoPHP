<x-layouts.app>

<head>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>


  <div class="container">
    <h1>{{ $cliente->Nome }}</h1>

    @if($cliente->Telefone)
      
      <p>TELEFONE:  {{ $cliente->Telefone }}</p>
    @endif

    @if($cliente->CPF)
      <p>CPF:  {{ $cliente->CPF }}</p>
    @endif


    @if($cliente->Endereco)
      <p>ENDEREÇO:  {{ $cliente->Endereco }}</p>
    @endif


    <div class="form-actions">
      <a href="{{ route('clientes.create') }}" class="btn">Novo Cliente</a>
      <a href="{{ route('clientes.index')}}"class="cancelar">Voltar</a>
    </div>
  </div>
</x-layouts.app>