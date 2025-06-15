<x-layouts.app :title="__('Novo Servico')" :dark-mode="auth()->check() ? auth()->user()->pref_dark_mode : false">

<head>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    
<div class= "container">
<H1>NOVO SERVIÇO </H1>


<form action="{{route('servicos.store')}}" method = "POST">
    @csrf 

<div class="form_group">
    <label for="Nome">Nome:</label>
    <input type="text" name ="Nome" required maxlength="50">
</div>


<div class="form_group">
    <label for="Descricao">Descrição:</label>
    <input type="text" name ="Descricao" required maxlength="300">
</div>
<div class="form_group">
    <label for="Elevacar">Elevacar:</label>
    <input type="text" name ="Elevacar" required maxlength="1">
</div>




<button type ="submit">Salvar</button>
<a href="{{route('servicos.index')}}" class = "cancelar"> Cancelar</a>
</form>

</div>

</x-layouts.app>