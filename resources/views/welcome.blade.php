@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Próximos Eventos</h2>
    <p class="subtitle">Veja os eventos dos próximos dias</p>
    <div id="card-container" class="row">
        @foreach ( $events as $event)
        <div class="card col-md-3">
            <img src="/img/events/{{ $event->image }}" alt="{{  $event->data }}">
            <div class="card-body">
                <h5 class="card-title">{{ $event->title }}</h5>
                <h5 class="card-title">{{ $event->data }}</h5>
                <p class="card-participantes">X Participantes</p>
                <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection
