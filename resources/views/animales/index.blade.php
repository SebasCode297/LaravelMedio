@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de animales</h1>
        <a href="{{route('animales.create')}}" class="btn btn-primary">Agregar animal</a>
        <table class="table mt-3">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Especie</th>
                <th scope="col">Acciones</th>   
            </tr>
            </thead>
            <tbody>
                @foreach ( $animales as $animal )
                <tr>
                    <td scope="row">{{$animal->id}}</td>
                    <td scope="row">{{$animal->nombre}}</td>
                    <td scope="row">{{$animal->especie}}</td>
                    <td scope="row">
                        <a href="{{route('animales.show',$animal->id)}}" class="btn btn-warning">Ver</a>
                        <a href="{{route('animales.edit',$animal->id)}}" class="btn btn-info">Editar</a>
                        <a href="{{route('animales.destroy',$animal->id)}}" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection