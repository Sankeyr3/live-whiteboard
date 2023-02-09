@extends('layout')
@section('title', 'Home')
@section('content')
    <div class="mainForm">
        <h1>Salas</h1>
        <div class="rooms">
            @for($i = 0; $i < 20; $i++)
                <a class="room">
                    <h2>Room {{$i}}</h2>
                    1/5
                </a>
            @endfor
            
        </div>
    </div>
    <div class="policy">
        <p>Al crear una sala, aceptas las condiciones de uso y la política de privacidad de la aplicación.</p>
    </div>
@endsection