<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Desafio Vitta</title>

        
    </head>
    <body>
        <h1>Criar novas tags</h1>

      
        <form class="" action="/desafio/tags" method="POST">
        <input type="text" name="nome" value="" placeholder="Nome">
        {{ ($errors->has('nome')) ? $errors->first('nome') : '' }}<br>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" name="name" value="Salvar">
         </form>
         


    </body>
</html>
