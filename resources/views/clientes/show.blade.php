<x-layouts.app>
  <div>
    <h1>{{ $cliente->Nome }}</h1>

    @if($cliente->Telefone)
      <p>{{ $cliente->Telefone }}</p>
    @endif

    @if($cliente->CPF)
      <p>{{ $cliente->CPF }}</p>
    @endif


    @if($cliente->Endereco)
      <p>{{ $cliente->Endereco }}</p>
    @endif


    <div>
      <a href="{{ route('clientes.create') }}">Novo Cliente</a>
      <a href="{{ url()->previous() }}">Voltar</a>
    </div>
  </div>
</x-layouts.app>