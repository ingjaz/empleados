@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
    <h1>Bienvenido a la pagina principal</h1>
    <a class="button button1" href="{{route('empleado')}}">Menu</a>
@endsection
