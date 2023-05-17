<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>
  <a href="{{route('clientes.create')}}">Cadastrar</a>
  <br><br>
    @foreach ($clientes as $cliente)
    <div>
      <div> 
        {{$cliente['nome']}} {{$cliente['sobrenome']}}<br><br>
      </div>
    
    
     <div>
      <a href="{{route('clientes.show',$cliente['nome'])}}">Ver</a> <a href="{{route('clientes.edit',$cliente['nome'])}}">Editar</a>
      
      <form action="{{route('clientes.destroy',$cliente['nome'])}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" href="">Excluir</button>
      </form>
      
    </div>
  </div>
    <hr>
      
    @endforeach
</body>
</html>