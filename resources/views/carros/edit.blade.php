<x-layouts.app :title="__('Editar Cliente')" :dark-mode="auth()->user()->pref_dark_mode">

<head>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

  <div class="container">
    <h1>Editar Carro</h1>

    <form action="{{ route('carros.update', $carro) }}" method="POST">
      @csrf
      @method('PUT')
    
      <div style="margin-top:1em;">
        <label for="clientes_id">Cliente ID</label><br>
        <textarea
          name="clientes_id"
          id="clientes_id"
          rows="4"
        required
        >{{ old('clientes_id', $carro->clientes_id) }}</textarea>
      </div>


      <div style="margin-top:1em;">
        <label for="Placa">Placa</label><br>
        <textarea
          name="Placa"
          id="Placa"
          rows="4"
          required
        >{{ old('Placa', $carro->Placa) }}</textarea>
      </div>

      <div style="margin-top:1em;">
        <label for="Marca">Marca</label><br>
        <textarea
          name="Marca"
          id="Marca"
          rows="4"
          required
        >{{ old('Marca', $carro->Marca) }}</textarea>
      </div>


      <div style="margin-top:1em;">
        <label for="Modelo">Modelo</label><br>
        <textarea
          name="Modelo"
          id="Modelo"
          rows="4"
          required
        >{{ old('Modelo', $carro->Modelo) }}</textarea>
      </div>

        <div style="margin-top:1em;">
        <label for="Ano">Ano</label><br>
        <textarea
          name="Ano"
          id="Ano"
          rows="4"
          required
        >{{ old('Ano', $carro->Ano) }}</textarea>
      </div>

      
        <div style="margin-top:1em;">
        <label for="Motor">Motor</label><br>
        <textarea
          name="Motor"
          id="Motor"
          rows="4"
          required
        >{{ old('Motor', $carro->Motor) }}</textarea>
      </div>




      <div style="margin-top:1em;">
        <button type="submit" >Atualizar</button>

        <a href="{{ route('carros.index', $carro) }}" class="cancelar">Cancelar</a>


      </div>
    </form>
  </div>
</x-layouts.app>
