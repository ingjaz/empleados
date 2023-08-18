@extends('layouts.plantilla')

@section('title', 'Editar Empleado ' . $numempleado->id)

@section('content')
    <h1>Editar empleado {{$numempleado->id}}</h1>
    <br><br><br>
    <a class="button button1" href="{{route('empleado.listado')}}">Lista Empleado</a>
    <br>
    <a class="button button1" href="{{route('empleado')}}">Menu</a>


    <form action="{{route('empleado.update', $numempleado)}}" method="POST">
        
        <!-- TOKEN -->
        @csrf

        <!-- PARA METODO PUT-->
        @method('put')

        <label>
            Nombre:
            <input type="text" name="name" id="name" value="{{old('name', $numempleado->name)}}">
        </label>
        @error('name')
        <br>
            <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
        <label>
            Apellido paterno:
            <input type="text" name="app" id="app" value="{{old('name', $numempleado->app)}}">
        </label>
        @error('app')
        <br>
            <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
        <label>
            Apellido materno:
            <input type="text" name="apm" id="apm" value="{{old('name', $numempleado->apm)}}">
        </label>
        @error('apm')
        <br>
            <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
        <label>
            Correo:
            <input type="text" name="email" id="email" value="{{old('name', $numempleado->email)}}">
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
                    @if($item->id == $puesto->id)
                        <option value="{{$item->id}}" selected>{{$item->name}}</option>
                    @else
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endif
                @endforeach
            </select>
        </label>
        <br>
        <label>
            Compañia:
            <select name="company" id="company">
                @foreach ($companies as $items)
                    @if($items->id == $companie->id)
                        <option value="{{$items->id}}" selected>{{$items->name}}</option>
                    @else
                        <option value="{{$items->id}}">{{$items->name}}</option>
                    @endif
                @endforeach
        </select>
        </label>
        <br>
        <label>
            Estatus:
            <select name="status" id="status">
                    @if($numempleado->status == 1)
                        <option value="1" selected>ACTIVO</option>
                        <option value="0">DESACTIVADO (ELIMINADO)</option>
                    @else
                        <option value="1">ACTIVO</option>
                        <option value="0" selected>DESACTIVADO (ELIMINADO)</option>
                    @endif
        </select>
        </label>

        <BR>
        <button type="submit">Guardar</button>

    </form>

@endsection