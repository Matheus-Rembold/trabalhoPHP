<x-layouts.app :title="__('Editar Agendamento')" :dark-mode="auth()->user()->pref_dark_mode">

<head>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

  <div class="container">
    <h1>Editar Agendamento</h1>

    <form action="{{ route('agendamentos.update', $agendamento) }}" method="POST">
      @csrf
      @method('PUT')
    
      <div style="margin-top:1em;">
        <label for="servicos_id">Serviço ID</label><br>
        <textarea
          name="servicos_id"
          id="servicos_id"
          rows="4"
        required
        >{{ old('servicos_id', $agendamento->servicos_id) }}</textarea>
      </div>


      <div style="margin-top:1em;">
        <label for="mecanicos_id">Mecanico ID</label><br>
        <textarea
          name="mecanicos_id"
          id="mecanicos_id"
          rows="4"
          required
        >{{ old('mecanicos_id', $agendamento->mecanicos_id) }}</textarea>
      </div>

      <div style="margin-top:1em;">
        <label for="carros_id">Carro ID</label><br>
        <textarea
          name="carros_id"
          id="carros_id"
          rows="4"
          required
        >{{ old('carros_id', $agendamento->carros_id) }}</textarea>
      </div>


      <div style="margin-top:1em;">
        <label for="Dia_do_servico">Dia do servico</label><br>
        <textarea
          name="Dia_do_servico"
          id="Dia_do_servico"
          rows="4"
          required
          maxlength="10"
        >{{ old('Dia_do_servico', $agendamento->Dia_do_servico) }}</textarea>
      </div>

        <div style="margin-top:1em;">
        <label for="Tempo_para_aprontar">Tempo para aprontar</label><br>
        <textarea
          name="Tempo_para_aprontar"
          id="Tempo_para_aprontar"
          rows="4"
          required
          maxlength="10"
        >{{ old('Tempo_para_aprontar', $agendamento->Tempo_para_aprontar) }}</textarea>
      </div>


      <div style="margin-top:1em;">
        <button type="submit" >Atualizar</button>

        <a href="{{ route('agendamentos.index', $agendamento) }}" class="cancelar">Cancelar</a>


      </div>
    </form>
  </div>
</x-layouts.app>
