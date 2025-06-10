@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card p-4">
        <h1 class="text-center mb-4">Detalle del Animal</h1>

        <div class="text-center">
            <img src="https://png.pngtree.com/thumb_back/fh260/background/20220211/pngtree-domestic-pigeon-indulging-in-tourists-lunch-crumbs-in-a-cityscape-photo-image_34670938.jpg"
                 alt="Imagen del Animal"
                 class="img-fluid mb-4"
                 style="max-width: 400px;">
        </div>

        <div class="text-center">
<p><strong>Nombre:</strong> {{ $animal->nombre }}</p>
<p><strong>Especie:</strong> {{ $animal->especie }}</p>
        </div>
    </div>
</div>
@endsection