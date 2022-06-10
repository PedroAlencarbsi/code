@extends('layouts.main')

@section('title', 'Teste')
@section('content')

<div id="search-container" class="col-md-12">
    <h1 id="search-text">Busque Evento</h1>
    <form action="">
        <input type="text" id="search" class="form-control" placeholder="Procurar">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Proximos Eventos</h2>
    <p class="subtitle">Veja os eventos dos proximos dias</p>
    <div id="cards-container" class="row">
        @foreach ($events as $event)
            <div class="card col-md-3">
                <img src="/img/events/{{$event->image}}" alt="{{ $event->title }}">
                <div class="card-body">
                    <p class="card-date">10/9/2020</p>
                    <h5 class="card-title"> {{$event->title}} </h5>
                    <p class="card-participants"> x participantes</p>
                    <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber Mais</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection    


