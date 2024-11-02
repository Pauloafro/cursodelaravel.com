@extends('includes.main')
@section('title','Criar Eventos')
@section('content')
<div class="contentor">
    <div class="form-image">
        <h3>https://undraw.co/</h3>
        <img src="/img/imgContacto.svg" alt="Formulario de contacto para agendar um evento">
    </div>
    <div class="form">
    <div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagens do evento</label>
            <input type="file" id="image" name="image" class="form-control-file">
        </div>
        <div class="form-group">
        <label for="title">Evento:</label>
            <input type="text" placeholder="Nome do evento" name="title" id="title" class="form-control">
            <label for="city">Cidade:</label>
            <input type="text" placeholder="Nome da cidade" name="city" id="city" class="form-control">
                <label for="date">Data do evento</label>
                <input type="date" name="date" id="date" class="form-control">
            </div>
            
            <div class="form-group">
                    <label for="private">O evento é privado?</label>
                    <select name="private" id="private" class="form-control">
                        <option value="0">Não</option>
                        <option value="1">Sim</option>
                    </select>
                    <br>
                    <label for="description">Descrição:</label>
                    <textarea name="description" id="description" placeholder="O que vai acontecer no evento" class="form-control"></textarea>
                    <label for="items">Adcione itens de infraestrutura:</label>
            </div>
            <div class="form-group">
                <label for="items">Itens de serviços</label>
                <br>
                Mesas e Cadeiras<input type="checkbox" name="items[]" id="mesasCadeiras" value="Mesas & Cadeiras">
                Palco<input type="checkbox" name="items[]" id="palco" value="palco">
                Buffet<input type="checkbox" name="items[]" id="buffet" value="Buffet">
                Bebidas<input type="checkbox" name="items[]" id="bebidas" value="Bebidas">
            </div>
            <input type="submit" class="btn btn-primary" value="Criar Evento">
        </div>
    </form>
</div>
    
</div>

@endsection