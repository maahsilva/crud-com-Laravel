<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editando</title>
</head>
<body>
    <form action="{{route('clientes.update',$cliente['nome'])}}" method="POST">
        @csrf
        @method('PUT')
        <label for="nome" >Nome</label>
        <input type="text" name="nome" value="{{$cliente ['nome']}}">
        <label for="sobrenome">Sobrenome</label>
        <input type="text" name="sobrenome"value="{{$cliente ['sobrenome']}}">
        <label for="cpf">CPF</label>
        <input type="text" name="cpf"value="{{$cliente ['cpf']}}">
        <button type="submit">Editar</button>
    </form>
</body>
</html>