<x-layouts.app>

<head>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>


  <div class="container">
    <h1>{{ $agendamento->id }}</h1>

    @if($agendamento->servicos_id)
      <p>Serviço ID:   {{ $agendamento->servicos_id }}</p>
    @endif

    @if($agendamento->mecanicos_id)
      <p>Mecanico ID:   {{ $agendamento->mecanicos_id}}</p>
    @endif

    @if($agendamento->carros_id)
      <p>Carro ID:   {{ $agendamento->carros_id }}</p>
    @endif

    @if($agendamento->Dia_do_servico)
      <p>Dia do servico:  {{ $agendamento->Dia_do_servico }}</p>
    @endif

     @if($agendamento->Tempo_para_aprontar)
      <p>Tempo para aprontar:   {{ $agendamento->Tempo_para_aprontar }}</p>
    @endif


    <div class="form-actions">
      <a href="{{ route('agendamentos.create') }}" class="btn">Novo Agendamento</a>
      <a href="{{ route('agendamentos.index')}}"class="cancelar">Voltar</a>
    </div>
  </div>
</x-layouts.app>