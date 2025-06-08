
<x-layouts.app :title="__('Novo Mecanico')" :dark-mode="auth()->check() ? auth()->user()->pref_dark_mode : false">

<head>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    
<div class= "container">
<H1>NOVO MECANICO </H1>


<form action="{{route('mecanicos.store')}}" method = "POST">
    @csrf 

<div class="form_group">
    <label for="Nome">Nome:</label>
    <input type="text" name ="Nome" required>
</div>

<button type ="submit">Salvar</button>
<a href="{{route('mecanicos.index')}}" class = "cancelar"> Cancelar</a>
</form>

</div>

</x-layouts.app>