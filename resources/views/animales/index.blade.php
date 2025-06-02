@extends('layouts.app')
@section('content')
<div class="container">
<h1>Vuelva Ing. Cola</h1>
<a href="{{route('animales.create')}}" class="btn btn-primary">agregar animal</a>
<table class="table mt-3">
<thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Especie</th>
        <th scope="col">Acciones</th>
    </tr>
</thead>
<tbody>
    <tr>
        <th scope="row">1</th>
        <th scope="row">firu</th>
        <th scope="row">especie</th>
        <th scope="row">
            <a href="#" class="btn btn-warning">Ver</a>
            <a href="#" class="btn btn-secondary">Editar</a>
            <a href="#" class="btn btn-dark">Eliminar</a>
        </th>
    </tr>
</tbody>

</table>

</div>
@endsection
