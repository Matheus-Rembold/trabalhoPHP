<x-layouts.app :title="__('Meus clientes')">
<head>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

  <div class="container">
    <div class = "header">
      <h1>Meus servicos</h1>
      <a href="{{ route('servicos.create') }}" class="novo">+ Novo Serviço </a>
    </div>

    @if($servicos->isEmpty())
      <p>Nenhum Serviço cadastrado.</p>
    @else
      <table  class="table">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Elevacar</th>
          </tr>
        </thead>
        <tbody>
          @foreach($servicos as $servico)
            <tr>
              <td>{{ $servico->Nome }}</td>
              <td>{{ $servico->Descricao }}</td>
              <td>{{ $servico->Elevacar }}</td>
              
              <td>
                <a href="{{ route('servicos.show', $servico) }}" class="link blue">Ver</a>
                |
                <a href="{{ route('servicos.edit', $servico) }}" class="link blue">Editar</a>
                |
                <form action="{{ route('servicos.destroy', $servico) }}" method="POST" style="display:inline" >
                  @csrf
                  @method('DELETE')
                  <button
                    type="button"
                    class="btn-excluir link red"
                    data-nome="{{ $servico->Nome }}">
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
