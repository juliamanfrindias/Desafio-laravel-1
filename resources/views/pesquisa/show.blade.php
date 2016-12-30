<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Desafio Vitta</title>

        
    </head>
    <body>
        <h1>Tag pesquisada</h1>

 
        <p><h3>Tag: </h3>{{ $tagui->nome}}  <p>
  
        <p>
              
        @if (count($task) < 1)
		    <p><b>Nenhuma tarefa associada!</b></p>
	    @else       
            <h3>Tarefas associadas:</h3>  
            @foreach($task as $tar)

                  {{ $tar->nome}}<br>
                
            @endforeach
        @endif
        </p>

       <br>
        <a href="{{url('desafio/pesquisar')}}"><button>Voltar</button></a>
        
    </body>
</html>
