<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos docinhos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
  
    <div class="container col-8">
	<p>ID:                  {{ $produto->id }}</p>
    <p>Nome:                {{ $produto->nome }}</p>
    <p>Descrição:           {{ $produto->descricao }}</p>
	<p>Valor:               {{ $produto->valor}}</p>
    <p>Criação:             {{ Carbon\Carbon::parse($produto->created_at)->format('d/m/Y H:i') }}</p>
    <p>Última modificação:  {{ Carbon\Carbon::parse($produto->updated_at)->format('d/m/Y H:i') }}</p>
    </div>

</body>
</html>