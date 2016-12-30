<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Desafio Vitta</title>
        
    </head>
    <body>
        <h1>Tags</h1>

        <p>
        <a href="{{url('desafio/tags/create')}}"><button>Criar</button></a>
        <a href="{{url('desafio')}}"><button>Voltar</button></a>
        </p>
        
       
    <table>
             @foreach($tags as $tag)
             <tr>

                <td> {{ $tag->nome}}</td>
                <td><a href="/desafio/tags/{{$tag->id}}"><button>Ver</button></a></td>
                <td><a href="/desafio/tags/{{$tag->id}}/edit"><button>Editar</button></a></td>

    
                <td>
                <form action="/desafio/tags/{{$tag->id }}" method="POST">
                    <input type="hidden" name="_method" value="delete">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" name="name" value="Apagar" >
                </form>
                </td>
               </tr>
              
                    
            @endforeach
    </table>

        

      
        
    </body>
</html>
