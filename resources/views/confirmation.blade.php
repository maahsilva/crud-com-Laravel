<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>
    <h1>{{$confirmation}}</h1>
    {{$cliente['nome']}} {{$cliente['sobrenome']}} <br>{{$cliente['cpf']}}<br>
    <a href="{{route('clientes.index')}}"></a>
</body>
</html>