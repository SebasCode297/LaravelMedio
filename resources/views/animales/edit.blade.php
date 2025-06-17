@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card p-4">
        <h1 class="text-center mb-4">Editar Animal</h1>

        <form action="{{ route('animales.update', $animal->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" name="nombre" id="nombre"
                       class="form-control"
                       value="{{ old('nombre', $animal->nombre) }}"
                       required>
            </div>

            <div class="mb-3">
                <label for="especie" class="form-label">Especie:</label>
                <input type="text" name="especie" id="especie"
                       class="form-control"
                       value="{{ old('especie', $animal->especie) }}"
                       required>
            </div>

            <div class="mb-3">
                <label for="url" class="form-label">URL de imagen (opcional):</label>
                <input type="url" name="url" id="url"
                       class="form-control"
                       value="{{ old('url', $animal->url) }}">
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-success">
                    Guardarc cambios
                </button>
                <a href="{{ route('animales.show', $animal->id) }}"
                   class="btn btn-secondary">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
