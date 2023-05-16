<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
</head>
<body>
    <div>
        @if ($text == '')

        <h1>{{$msg}}</h1>
        
            
        @else
        <h1>{{$text}}</h1>
        {{$cliente['nome']}}
        @endif
        
    </div>

</body>
</html>