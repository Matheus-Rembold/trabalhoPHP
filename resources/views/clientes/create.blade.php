<x-layouts.app :title="__('Editar Cliente')" :dark-mode="auth()->user()->pref_dark_mode">

<head>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    
<div class= "container">
<H1>NOVO CLIENTE </H1>


<form action="{{route('clientes.store')}}" method = "POST">
    @csrf 

<div class="form_group">
<label for="Nome">Nome:</label>
<input type="text" name ="Nome">
</div>

<div class="form_group">
<label for="Telefone">Telefone:</label>
<input type="text" name ="Telefone">
</div>


<div class="form_group">
<label for="CPF">CPF:</label>
<input type="text" name ="CPF">
</div>

<div class="form_group">
<label for="Endereco">Endereço:</label>
<input type="text" name ="Endereco">
</div>

<button type ="button"class="salvar">Salvar</button>
<a href="{{route('clientes.index')}}" class = "cancelar"> Cancelar</a>
</form>

</div>

</x-layouts.app>