<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Desafio Vitta</title>

        
    </head>
    <body>
        <h1>Editar esta tag</h1>

       <p><h3>Tag: </h3>{{ $tagui->nome}}  <p>

   <form action="/desafio/tags/{{$tagui->id}}" method="POST">
        <input type="text" name="nome" value="{{ $tagui->nome}}" placeholder="Nome">
        {{ ($errors->has('nome')) ? $errors->first('nome') : '' }}<br>
        <input type="hidden" name="_method" value="put">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" name="name" value="Salvar">
         </form>
    

       
    <br>
    <a href="{{url('desafio/tags')}}"><button>Voltar</button></a>
         


    </body>
</html>
