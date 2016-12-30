<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Desafio Vitta</title>

        
    </head>
    <body>
        <h1>Resultado da pesquisa</h1>
        <p>
         <a href="{{url('desafio')}}"><button>Voltar</button></a>
        </p>

        
       <p>  
            @foreach($tags as $tag)

                   
            <a href="/desafio/pesquisar/{{$tag->id}}" > 
            {{ $tag->nome}} </a><br>

                    
                
            @endforeach
        
        </p>

        
        
    </body>
</html>
