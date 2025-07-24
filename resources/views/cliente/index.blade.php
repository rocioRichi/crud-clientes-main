@extends('layouts.main')

@section('titulo', 'Listado')

@section('cabecera')
    <section class="pt-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Listado de clientes</h1>
                <p class="lead text-muted">Podemos ver todos los clientes</p>
            </div>
        </div>
    </section>

@endsection

@section('contenido')
    @if (session('mensaje'))
        <div class="row m-3">
            <div class="alert alert-info">
                {{ session('mensaje') }}
            </div>
        </div>
    @endif
    <div class="row mt-1 row-cols-1 row-cols-lg-3 row-cols-md-2 g-4">
        @foreach ($clientes as $cliente)
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $cliente->id }}
                        </h5>
                        <p class="card-text">
                            Nombre: {{ $cliente->nombre }}
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
                        <p class="card-text">
                            email: {{ $cliente->email }}
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="vertical-align-bottom d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="{{ route('cliente.show', $cliente->id) }}" class="btn btn-outline-primary">Ver</a>
                                <a href="{{ route('cliente.edit', $cliente->id) }}"
                                    class="btn btn-outline-primary">Editar</a>
                            </div>
                            <form action="{{ route('cliente.destroy', $cliente) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row mt-3">
        {{ $clientes->links() }}
    </div>


@endsection
