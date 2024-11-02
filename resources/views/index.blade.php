@extends('includes.main')
@section('title','HDCEvents')
@section('content')
<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Pesquisar ...">
    </form>
    </div>
    <div id="events-container" class="col-md-12">
       @if($search)
            <p>Buscando Por: {{$search}}</p>
       @endif
        <p class="subtitle">Veja os eventos dos proximos dias</p>
        <div id="cards-container" class="row">
            @foreach($events as $event)
            <div class="card col-md-3">
                <img src="/img/Events/{{$event->image}}" alt="{{$event->title}}">
                <div class="card-body">
                    <div class="card-date">{{date('d/m/y',strtotime($event->date))}}</div>
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="participants">x participantes</p>
                    <a href="/events/{{$event->id}}" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
            @endforeach
            @if(count($events)==0 && isset($search))
            <p>Não foi possivel encontrar nenhum evento com {{$search}} | <a href="/">ver todos</a></p>
            @elseif(count($events)==0)
            <p>Não há eventos disponiveis</p>
            @endif
        </div>
    </div>
@endsection