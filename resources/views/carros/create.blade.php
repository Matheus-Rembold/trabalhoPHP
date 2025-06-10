<x-layouts.app :title="__('Novo Mecanico')" :dark-mode="auth()->check() ? auth()->user()->pref_dark_mode : false">

<head>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    
<div class= "container">
<H1>NOVO CARRO </H1>


<form action="{{route('carros.store')}}" method = "POST">
    @csrf 

<div class="form_group">
<label for="clientes_id">Cliente</label>
    <select name="clientes_id" id="disciplina_id" required>
    <option value="">Selecione...</option>
        @foreach ($clientes as $cliente)
                <option value="{{ $cliente->id }}" {{ $cliente->id  ? 'selected' : '' }}>  
             {{ $cliente->Nome }}
            </option>
        @endforeach
                
    </select>  
</div>


<div class="form_group">
    <label for="Nome">Placa:</label>
    <input type="text" name ="Placa" required>
</div>
<div class="form_group">
    <label for="Nome">Marca:</label>
    <input type="text" name ="Marca" required>
</div>
<div class="form_group">
    <label for="Nome">Modelo:</label>
    <input type="text" name ="Modelo" required>
</div>
<div class="form_group">
    <label for="Nome">Ano:</label>
    <input type="text" name ="Ano" required>
</div>
<div class="form_group">
    <label for="Nome">Motor:</label>
    <input type="text" name ="Motor" required>
</div>




<button type ="submit">Salvar</button>
<a href="{{route('carros.index')}}" class = "cancelar"> Cancelar</a>
</form>

</div>

</x-layouts.app>