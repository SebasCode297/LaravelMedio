@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card p-4">
        <h1 class="text-center mb-4">Detalle del Animal</h1>

        <div class="text-center">
            <img src="{{ $animal->url ?? 'https://png.pngtree.com/...jpg' }}"
                 alt="Imagen del Animal"
                 class="img-fluid mb-4"
                 style="max-width: 400px;">
        </div>

        <div class="text-center">
            <p><strong>Nombre:</strong> {{ $animal->nombre }}</p>
            <p><strong>Especie:</strong> {{ $animal->especie }}</p>
        </div>

        <!-- Botones de acción -->
        <div class="text-center mt-4">
            <!-- Editar -->
            <a href="{{ route('animales.edit', $animal->id) }}" class="btn btn-primary">
                Editar
            </a>

            <!-- Eliminar -->
            <form action="{{ route('animales.destroy', $animal->id) }}" method="POST"
                  class="d-inline-block"
                  onsubmit="return confirm('¿Seguro que deseas eliminar este animal?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    Eliminar
                </button>
            </form>
        </div>

    </div>
</div>
@endsection
