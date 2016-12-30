<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Desafio Vitta</title>

        
    </head>
    <body>
        <h1>Pesquisar</h1>
        <p>
         <a href="{{url('desafio')}}"><button>Voltar</button></a>
        </p>

       <p>Pesquise tags...</p>

            {!! Form::open(['url'=>'desafio/pesquisar/search', 'class'=>'navbar-form']) !!}
            {!! Form::text('nome1',null,['class'=>'form-control','placeholder'=>'nome da tag']) !!}
            <button type="submit">Pesquisar</button>
            {!! Form::close() !!}
 

        
        
    </body>
</html>
