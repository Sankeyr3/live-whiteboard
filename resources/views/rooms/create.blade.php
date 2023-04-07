@extends('layout')
@section('title', 'Crear sala')
@section('content')
<form action="{{route('rooms.store')}}" method="POST">
    @csrf
    <h1>Crear sala</h1><br>
        <div class="form-group">
        <label for="name">Nombre de la sala</label><br>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    {{-- max participants --}}
    <div class="form-group">
        <label for="max_participants">Número máximo de participantes</label><br>
        <input type="number" name="max_participants" id="max_participants" class="form-control">
    </div>
    <input type="submit" class="btn" value="Crear sala">
</form>
@endsection