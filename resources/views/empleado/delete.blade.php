@extends('layouts.plantilla')

@section('title', 'Eliminar Empleado ' . $numempleado)

@section('content')
    <!--<h1>Elimina empleado <?php //echo $numempleado ?></h1> -->
    <h1>Elimina empleado {{$numempleado}}</h1>
@endsection