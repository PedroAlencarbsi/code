<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
        
    </head>
    <body>
        <h1>Algum titulo</h1>
        <img src="/img/sana.jpg" alt="banner" srcset="">
        @if (10 > 15)
            <p>A condição é true</p>
        @endif
        @if($name == "carlo")
        <P>O NOME NAO É PEDRO</P>
        @elseIF($name == "pedro")
        <P>O nome é {{$name}}, tem {{$age}} anos e é {{$profissao}} </P>
        @endif

        @for ($i = 0; $i < count($arr); $i++)
            <p>Numero é - {{$i}} </p>
        @if($i == 3)
            <p>O numero ta certo {{$i}}</p>
        @endif
        @endfor
    </body>
</html>
