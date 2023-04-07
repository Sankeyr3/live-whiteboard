@extends('layout')
@section('title', 'Login')
@section('content')
<form action="{{route('login')}}" method="POST">
    @csrf
    {{-- error card --}}
    @if($errors->any())
    <div class="card">
        <div class="card-header">
            <h3>Errores</h3>
        </div>
        <div class="card-body">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
    <div class="form-group">
        <label for="name">Name</label>
        <input name="name" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>
    <input type="submit" class="btn" value="Iniciar sesión">
</form>
@endsection
