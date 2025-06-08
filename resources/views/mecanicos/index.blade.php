<x-layouts.app :title="__('Meus clientes')">
  <body>
<head>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

  <div class="container">
    <div class = "header">
      <h1>Meus mecanicos</h1>
      <a href="{{ route('mecanicos.create') }}" class="novo">+ Novo Mecanico </a>
    </div>

    @if($mecanicos->isEmpty())
      <p>Nenhum mecanico cadastrado.</p>
    @else
      <table  class="table">
        <thead>
          <tr>
            <th>Nome</th>
          </tr>
        </thead>
        <tbody>
          @foreach($mecanicos as $mecanico)
            <tr>
              <td>{{ $mecanico->Nome }}</td>
              <td>
                <a href="{{ route('mecanicos.show', $mecanico) }}" class="link blue">Ver</a>
                |
                <a href="{{ route('mecanicos.edit', $mecanico) }}" class="link blue">Editar</a>
                |
                <form action="{{ route('mecanicos.destroy', $mecanico) }}" method="POST" style="display:inline" >
                  @csrf
                  @method('DELETE')
                  <button
                    type="button"
                    class="btn-excluir link red"
                    data-nome="{{ $mecanico->Nome }}">
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
   </body>
</x-layouts.app>
