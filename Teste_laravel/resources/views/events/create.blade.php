@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3" >
    <h1>Crie seu Evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem do Evento:</label>
            <input type="file" id="image" name="image" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Nome do Evento">
        </div>
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" name="city" id="city" placeholder="Local do Evento">
        </div>
        <div class="form-group">
            <label for="title">O evento é privado ?:</label>
            <select type="text" class="form-control" name="private" id="private">
                <option value="0">Nao</option>
                <option value="1">Sim</option>
            </select>    
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea type="text" class="form-control" name="description" id="description" placeholder="Explique o Evento"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
</div>
@endsection
