@extends('layouts.main')

@section('title' , $event->title)

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/events/{{ $event->image }}" class="img-fluid" alt="{{ $event->title }}">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{ $event->title}}</h1>
                <p class="event-city"><ion-icon name="location-outline"></ion-icon> {{ $event->city }}</p>
                <p class="events-participantes"><ion-icon name="people-outline"></ion-icon> X Participantes</p>
                <p class="event-owner"><ion-icon name="star-outline"></ion-icon>{{ $eventOwner['name'] }}</p>
                <a href="" id="event-submts" class="btn btn-primary">Confirmar Presença</a>
                <h3>O evento conta com: </h3>
                <ul id="items-list">
                    @foreach ($event->itens as $item)
                        <li><ion-icon name="play-outline"></ion-icon><p>{{ $item }}</p></li>
                    @endforeach
                </ul>
                <h3>Data do evento</h3>
                <div class="date">
                    <ion-icon name="calendar-outline"></ion-icon><p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                </div>
            </div>
            <div id="description-container" class="col-md-12">
                <h3>Sobre o evento:</h3>
                <p class="event-description">{{ $event->description}}</p>
            </div>
        </div>
    </div>

@endsection
