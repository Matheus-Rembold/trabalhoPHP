<x-layouts.app :title="__('Meus clientes')">
  <div>
    <div>
      <h1>Meus clientes</h1>
      <a href="{{ route('clientes.create') }}">+ Novo Cliente </a>
    </div>

    @if($clientes->isEmpty())
      <p>Nenhum cliente cadastrado.</p>
    @else
      <table  cellpadding="8" cellspacing="0">
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
                <a href="{{ route('clientes.show', $cliente) }}">Ver</a>
                |
                <a href="{{ route('clientes.edit', $cliente) }}">Editar</a>
                |
                <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" style="display:inline" onsubmit="return confirm('Tem certeza que deseja excluir este cliente?')">
                  @csrf
                  @method('DELETE')
                  <button type="submit">Excluir</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @endif
  </div>
</x-layouts.app>