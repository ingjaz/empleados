@extends('layouts.plantilla')

@section('title', 'Ver Empleado ' . $numempleado)

@section('content')
    <h1>Vista de empleado {{$numempleado}}</h1>
    <br><br><br>
    <a class="button button1" href="{{route('empleado.listado')}}">Lista Empleado</a>
    <br>
    <a class="button button1" href="{{route('empleado')}}">Menu</a>

    <table>

        <tr>
            <th>Id</th>
            <th>{{$empleados->id}}</th>
        </tr>
        <tr>
            <th>Nombre</th>
            <th>{{$empleados->name}}</th>
        </tr>
        <tr>
            <th>Apellido paterno</th>
            <th>{{$empleados->app}}</th>
        </tr>
        <tr>
            <th>Apellido materno</th>
            <th>{{$empleados->apm}}</th>
        </tr>
        <tr>
            <th>Correo</th>
            <th>{{$empleados->email}}</th>
        </tr>
        <tr>
            <th>Puesto</th>
            <th>{{$puesto->name}}</th>
        </tr>
        <tr>
            <th>Fecha de ingreso</th>
            <th>{{$empleados->created_at}}</th>
        </tr>
        <tr>
            <th>Compania</th>
            <th>{{$companie->name}}</th>
        </tr>
        <tr>
            <th>Estatus</th>
            @if($empleados->status == 1)
                <th>ACTIVO</th>
            @else
                <th>DESACTIVADO</th>
            @endif
        </tr>
        <tr>
            <th>Acciones</th>
            <th>
                <a class="button button3" href="{{route('empleado.edit', $empleados->id)}}">Modificar</a>
                <!-- <a class="button button2" href="{{route('empleado.delete', $empleados->id)}}">Eliminar</a> -->
            </th>
        </tr>

        
    </table>
@endsection