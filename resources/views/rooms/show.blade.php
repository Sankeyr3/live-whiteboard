@extends('layout')
@section('title', $room->name)
@section('content')
<div class="room">
    <div class="chat">
        chat
    </div>
    <div class="board">
        <h2>{{ $room->name }}</h2>
        <p>{{$room->participants}}/{{$room->max_participants}}</p>
    </div>
    <div class="participants">
        <h2>Participants</h2>
        <ul>
            <h3>Manuel</h3>
            <h3>Antonio</h3>
            <h3>mas</h3>
            <h3>nombres</h3>
            <h3>12345</h3>
        </ul>
    </div>
</div>
@endsection
