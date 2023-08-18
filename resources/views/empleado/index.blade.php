@extends('layouts.plantilla')

@section('title', 'Index')

@section('content')
    <h1>Bienvenido a empleados</h1>
    <!--empleado.listado  -->
    <a class="button button1" href="{{route('empleado.create')}}">Nuevo Empleado</a>
    <br>
    <a class="button button1" href="{{route('empleado.listado')}}">Lista Empleado</a>
@endsection