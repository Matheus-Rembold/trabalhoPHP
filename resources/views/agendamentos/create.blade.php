<x-layouts.app :title="__('Novo Agendamento')" :dark-mode="auth()->check() ? auth()->user()->pref_dark_mode : false">

<head>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    
<div class= "container">
<H1>NOVO AGENDAMENTO </H1>


<form action="{{route('agendamentos.store')}}" method = "POST">
    @csrf 



    
<div class="form_group">
    <label for="servicos_id">Serviço ID:</label>
    <input type="text" name ="servicos_id" required>
</div>

<div class="form_group">
    <label for="mecanicos_id">Mecanico ID:</label>
    <input type="text" name ="mecanicos_id" required>
</div>
<div class="form_group">
    <label for="carros_id">Carro ID:</label>
    <input type="text" name ="carros_id" required>
</div>




<div class="form_group">
    <label for="Dia_do_servico">Dia do serviço:</label>
    <input type="text" name ="Dia_do_servico" required>
</div>
<div class="form_group">
    <label for="Tempo_para_aprontar">Tempo para aprontar:</label>
    <input type="text" name ="Tempo_para_aprontar" required>
</div>




<button type ="submit">Salvar</button>
<a href="{{route('agendamentos.index')}}" class = "cancelar"> Cancelar</a>
</form>

</div>

</x-layouts.app>