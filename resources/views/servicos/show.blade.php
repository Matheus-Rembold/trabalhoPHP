<x-layouts.app>

<head>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>


  <div class="container">
    <h1>{{ $servico->Nome }}</h1>
   
    @if($servico->Descricao)
      <p>Descricao:  {{ $servico->Descricao }}</p>
    @endif
      @if($servico->Elevacar)
      <p>Elevacar:  {{ $servico->Elevacar }}</p>
    @endif




    <div class="form-actions">
      <a href="{{ route('servicos.create') }}" class="btn">Novo Servico</a>
      <a href="{{ route('servicos.index')}}"class="cancelar">Voltar</a>
    </div>
  </div>
</x-layouts.app>