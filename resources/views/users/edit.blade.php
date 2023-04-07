@extends('layout')
@section('title', 'Editar usuario')
@section('content')
<form action="{{route('users.update', $user)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" class="form-control" value="{{$user->name}}">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="{{$user->email}}">
    </div>
    <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>
    <div class="form-group">
        <label for="password_confirmation">Confirmar contraseña</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
    </div>
    <input type="submit" class="btn" value="Actualizar">
</form>
@endsection