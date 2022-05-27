@extends('layouts.main')

@section('title', 'Teste')
@section('content')
    
@endsection    

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

