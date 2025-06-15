<x-layouts.app :title="__('Editar Servico')" :dark-mode="auth()->user()->pref_dark_mode">

<head>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

  <div class="container">
    <h1>Editar Serviço</h1>

    <form action="{{ route('servicos.update', $servico) }}" method="POST">
      @csrf
      @method('PUT')

      <div style="margin-top:1em;">
        <label for="Nome">Nome</label><br>
        <textarea
          name="Nome"
          id="Nome"
          rows="4"
          required
          maxlength="50"
        >{{ old('Nome', $servico->Nome) }}</textarea>
      </div>

      <div style="margin-top:1em;">
        <label for="Descricao">Descrição</label><br>
        <textarea
          name="Descricao"
          id="Descricao"
          rows="4"
          required
          maxlength="300"
        >{{ old('Descricao', $servico->Descricao) }}</textarea>
      </div>

      
      <div style="margin-top:1em;">
        <label for="Elevacar">Elevacar</label><br>
        <textarea
          name="Elevacar"
          id="Elevacar"
          rows="4"
          required
          maxlength="1"
        >{{ old('Elevacar', $servico->Elevacar) }}</textarea>
      </div>


      <div style="margin-top:1em;">
        <button type="submit" 
       
        >Atualizar</button>

      
        <a href="{{ route('servicos.index', $servico) }}" class="cancelar">Cancelar</a>


      </div>
    </form>
  </div>
</x-layouts.app>
