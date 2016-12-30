<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Desafio Vitta</title>

        
    </head>
    <body>
        <h1>Ver Tarefa</h1>


        <p><h3>Tarefa: </h3>{{ $tarefa->nome}}  <p>


        <p>
        @if (count($tag) < 1)
		    <p><b>Nenhuma tag associada!</b></p>
	    @else      
            <h3>Tags associadas:</h3>
            @foreach($tag as $tagui)

                {{ $tagui->nome}}<br>
        
            @endforeach
        @endif
        </p>
       
       <br>
        <a href="{{url('desafio/tarefas')}}"><button>Voltar</button></a>
        
    </body>
</html>
