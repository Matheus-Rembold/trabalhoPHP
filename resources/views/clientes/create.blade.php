<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    
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

<button type = "submit" calss ="bnt ">Salvar</button>
<a href="{{route('clientes.index')}}" class = "bnt"> Cancelar</a>

    

</form>



</div>


</body>
</html>