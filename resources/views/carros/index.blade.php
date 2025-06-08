<x-layouts.app :title="__('Meus clientes')">
<head>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

  <div class="container">
    <div class = "header">
      <h1>Meus Carros</h1>
      <a href="{{ route('carros.create') }}" class="novo">+ Novo Carro </a>
    </div>

    @if($carros->isEmpty())
      <p>Nenhum Carro cadastrado.</p>
    @else
      <table  class="table">
        <thead>
          <tr>
            <th>Cliente_id</th>
            <th>Placa</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ano</th>
            <th>Motor</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          @foreach($carros as $carro)
            <tr>
              <td>{{ $carro->clientes_id }}</td>
              <td>{{ ($carro->Placa) }}</td>
              <td>{{ $carro->Marca }}</td>
              <td>{{ $carro->Modelo }}</td>
              <td>{{ $carro->Ano }}</td>
              <td>{{ $carro->Motor }}</td>
              <td>
                <a href="{{ route('carros.show', $carro) }}" class="link blue">Ver</a>
                |
                <a href="{{ route('carros.edit', $carro) }}" class="link blue">Editar</a>
                |
                <form action="{{ route('carros.destroy', $carro) }}" method="POST" style="display:inline" >
                  @csrf
                  @method('DELETE')
                  <button
                    type="button"
                    class="btn-excluir link red"
                    data-nome="{{ $carro->Placa }}">
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
