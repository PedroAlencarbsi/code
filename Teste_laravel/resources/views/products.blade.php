@extends('layouts.main')
    
@section('title', 'produtos')
@section('content')
<h1>Tela de Produtos</h1>

@if ($busca != '')
    <p>o usuario esta buscando por: {{ $busca }}</p>
@endif

@endsection

    