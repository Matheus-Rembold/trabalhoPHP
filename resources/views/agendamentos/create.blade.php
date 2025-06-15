<x-layouts.app :title="__('Novo Agendamento')" :dark-mode="auth()->check() ? auth()->user()->pref_dark_mode : false">

<head>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    
<div class= "container">
<H1>NOVO AGENDAMENTO </H1>


<form action="{{route('agendamentos.store')}}" method = "POST">
    @csrf 



<div class="form_group">
<label for="servicos_id">Serviços</label>
    <select name="servicos_id" id="disciplina_id" required>
    <option value="">Selecione...</option>
        @foreach ($servicos as $servico)
                <option value="{{ $servico->id }}" {{ $servico->id  ? 'selected' : '' }}>  
             {{ $servico->Nome }}
            </option>
        @endforeach
                
    </select>  
</div>


<div class="form_group">
<label for="mecanicos_id">Mecanico</label>
    <select name="mecanicos_id" id="disciplina_id" required>
    <option value="">Selecione...</option>
        @foreach ($mecanicos as $mecanico)
                <option value="{{ $mecanico->id }}" {{ $mecanico->id  ? 'selected' : '' }}>  
             {{ $mecanico->Nome }}
            </option>
        @endforeach
                
    </select>  


    <div class="form_group">
<label for="carros_id">Carro</label>
    <select name="carros_id" id="disciplina_id" required>
    <option value="">Selecione...</option>
        @foreach ($carros as $carro)
                <option value="{{ $carro->id }}" {{ $carro->id  ? 'selected' : '' }}>  
             {{ $carro->Placa }}
            </option>
        @endforeach
                
    </select>  






<div class="form_group">
    <label for="Dia_do_servico">Dia do serviço:</label>
    <input type="text" name ="Dia_do_servico" required maxlength="10">
</div>
<div class="form_group">
    <label for="Tempo_para_aprontar">Tempo para aprontar:</label>
    <input type="text" name ="Tempo_para_aprontar" required maxlength="10">
</div>




<button type ="submit">Salvar</button>
<a href="{{route('agendamentos.index')}}" class = "cancelar"> Cancelar</a>
</form>

</div>

</x-layouts.app>