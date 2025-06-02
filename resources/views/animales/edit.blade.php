@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Editar animal</h1>
    <form action="" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label"> nombre</label>
            <input type="text" class="form-control" id="">
        </div>
        <button type= "submit"></button>
    </form>
    <a href="{{route('animales.index')}}" class="btn btn-danger"></a>

</div>

@endsection