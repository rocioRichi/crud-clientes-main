@extends('layouts.main')

@section('titulo', 'Mostrar')

@section('cabecera')
    <section class="pt-5 container">
        <div class="row py-lg-5">
            <h1 class="display-4 fw-bold lh-1 mb-3">Ver cliente</h1>
            <p class="col-lg-10 fs-4">
                Estos son los datos del cliente solicitados
            </p>
        </div>
    </section>
@endsection

@section('contenido')
    @if (session('mensaje'))
        <div class="row m-2">
            <div class="alert alert-info">
                {{ session('mensaje') }}
            </div>
        </div>
    @endif
    <div class="row mt-3">
        <div class="col">
            <div class="card shadow-xl">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $cliente->id }}
                    </h5>
                    <p class="card-text">
                        Nombre: {{ $cliente->nombre }}
                    </p>
                    <p class="card-text">
                        email: {{ $cliente->email }}
                    </p>
                    <p class="card-text">
                        Nombre: {{ $cliente->apellidos }}
                    </p>
                    <p class="card-text">
                        Nombre: {{ $cliente->direccion }}
                    </p>
                    <p class="card-text">
                        Nombre: {{ $cliente->telefono }}
                    </p>
                    <div class="card-footer">
                        <div class="vertical-align-bottom d-flex justify-content-between align-items-center">
                            <a href="{{ route('cliente.edit', $cliente->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('cliente.destroy', $cliente) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
