<x-layouts.app :title="__('Meus agendamentos')">
<head>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

  <div class="container">
    <div class = "header">
      <h1>Meus Agendamentos</h1>
      <a href="{{ route('agendamentos.create') }}" class="novo">+ Novo Agendamento </a>
    </div>

    @if($agendamentos->isEmpty())
      <p>Nenhum Agendamento cadastrado.</p>
    @else
      <table  class="table">
        <thead>
          <tr>
            <th>Serviço_id</th>
            <th>Mecanico_id</th>
            <th>Carro_id</th>
            <th>Dia_do_servico</th>
            <th>Tempo_para_aprontar</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          @foreach($agendamentos as $agendamento)
            <tr>
              <td>{{ $agendamento->servicos_id }}</td>
              <td>{{$agendamento->mecanicos_id }}</td>
              <td>{{ $agendamento->carros_id }}</td>
              <td>{{ $agendamento->Dia_do_servico }}</td>
              <td>{{ $agendamento->Tempo_para_aprontar }}</td>
              
              <td>
                <a href="{{ route('agendamentos.show', $agendamento) }}" class="link blue">Ver</a>
                |
                <a href="{{ route('agendamentos.edit', $agendamento) }}" class="link blue">Editar</a>
                |
                <form action="{{ route('agendamentos.destroy', $agendamento) }}" method="POST" style="display:inline" >
                  @csrf
                  @method('DELETE')
                  <button
                    type="button"
                    class="btn-excluir link red"
                    data-nome="{{ $agendamento->id }}">
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