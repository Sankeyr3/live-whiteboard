@extends('layout')
@section('title', 'register')
@section('content')
<form action="{{route('register')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>
    <div class="form-group">
        <label for="password_confirmation">Confirmar contraseña</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
    </div>
    <input type="submit" class="btn" value="Registrarse">
@endsection
