@extends('layouts.plantilla')

@section('title', 'Ver lista Empleado')

@section('content')
    <h1>Bienvenido a la lista de empleados</h1>

    <a class="button button1" href="{{route('empleado.create')}}">Nuevo Empleado</a>
    <br>
    <a class="button button1" href="{{route('empleado')}}">Menu</a>

    <table>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido paterno</th>
            <th>Apellido materno</th>
            <th>Correo</th>
            <th>Puesto</th>
            <th>Fecha de ingreso</th>
            <th>Compania</th>
            <th>Acciones</th>
        </tr>

        @foreach ($empleados as $item)
            <tr>
                
                <th>{{$item->id}}</th>
                <th>{{$item->name}}</th>
                <th>{{$item->app}}</th>
                <th>{{$item->apm}}</th>
                <th>{{$item->email}}</th>
                <th>{{$item->idpuesto}}</th>
                <th>{{$item->created_at}}</th>.
                <th>{{$item->idcompania}}</th>
                <th>
                    <a class="button button1" href="{{route('empleado.detalle', $item->id)}}">Detalle</a>
                </th>
            </tr>
         @endforeach
        
            
        
    </table>

    {{$empleados->links()}}

@endsection