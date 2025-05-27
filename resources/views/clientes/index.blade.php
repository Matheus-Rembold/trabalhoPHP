<x-layouts.app :title="__('Meus clientes')">
<head>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

  <div class="container">
    <div class = "header">
      <h1>Meus Clientes</h1>
      <a href="{{ route('clientes.create') }}" class="novo">+ Novo Cliente </a>
    </div>

    @if($clientes->isEmpty())
      <p>Nenhum cliente cadastrado.</p>
    @else
      <table  class="table">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>CPF</th>
            <th>Endereço</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          @foreach($clientes as $cliente)
            <tr>
              <td>{{ $cliente->Nome }}</td>
              <td title="{{ $cliente->telefone }}">
                {{ ($cliente->Telefone) }}
              </td>
              <td>{{ $cliente->CPF }}</td>
              <td>{{ $cliente->Endereco }}</td>
              <td>
                <a href="{{ route('clientes.show', $cliente) }}" class="link blue">Ver</a>
                |
                <a href="{{ route('clientes.edit', $cliente) }}" class="link blue">Editar</a>
                |
                <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" style="display:inline" >
                  @csrf
                  @method('DELETE')
                  <button
                    type="button"
                    class="btn-excluir link red"
                    data-nome="{{ $cliente->Nome }}">
                    Excluir
                    </button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @endif
  </div>
</x-layouts.app>
