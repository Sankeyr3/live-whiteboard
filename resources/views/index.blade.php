@extends('layout')
@section('title', 'Home')
@section('content')
    @include('partials.navbar')
    <div class="mainForm">
        <h1>Salas disponibles</h1>
        <div class="rooms">
            @forelse($rooms as $room)
                <a class="room-link link-none" href="{{route('rooms.show', $room)}}">
                    <h2>{{$room->name}}</h2>
                    {{$room->participants}} / {{$room->max_participants}}
                </a>
            @empty
                <p>No hay salas disponibles</p>
            @endforelse
            
        </div>
    </div>
    <div class="policy">
        <a href="{{route('rooms.create')}}" class="btn">Crear sala</a>
        <p>Al crear una sala, aceptas las condiciones de uso y la política de privacidad de la aplicación.</p>
    </div>
@endsection