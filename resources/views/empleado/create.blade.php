@extends('layouts.plantilla')

@section('title', 'Crear Empleado')

@section('content')
<h1>Bienvenido a la creacion de empleados</h1>
    <a class="button button1" href="{{route('empleado.listado')}}">Lista Empleado</a>
    <br>
    <a class="button button1" href="{{route('empleado')}}">Menu</a>

    <br><br><br><br>


    <form action="{{route('empleado.store')}}" method="POST">
        
        @csrf

        <label>
            Nombre:
            <input type="text" name="name" id="name" value="{{old('name')}}">
        </label>
        @error('name')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror
            
        <br>
        <label>
            Apellido paterno:
            <input type="text" name="app" id="app" value="{{old('app')}}">
        </label>
        @error('app')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror
            
        <br>
        <label>
            Apellido materno:
            <input type="text" name="apm" id="apm" value="{{old('apm')}}">
        </label>
        @error('apm')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror
            
        <br>
        <label>
            Correo:
            <input type="text" name="email" id="email" value="{{old('email')}}">
        </label>
        @error('email')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror
            
        <br>
        <label>
            Puesto:
            <select name="puesto" id="puesto">
                @foreach ($puestos as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </label>
        @error('puesto')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror
            
        <br>
        <label>
            Compañia:
            <select name="company" id="company">
                @foreach ($companies as $items)
                    <option value="{{$items->id}}">{{$items->name}}</option>
                @endforeach
            </select>
        </label>
        @error('company')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror
            

        <BR>
        <button type="submit">Enviar formulario</button>

    </form>
    

@endsection
