@extends('layouts.main')

@section('titulo', 'Inicio')

@section('cabecera')
    <section class="pt-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Aplicacion Web</h1>
                <p class="lead text-muted">Podemos gestionar los clientes de una tabla</p>
            </div>
        </div>
    </section>
@endsection

@section('contenido')
    <div class="row mt-3 text-center">
        <div>
            <p>
                <a href="{{ route('cliente.index') }}" class="btn btn-primary">Abrir</a>
            </p>
        </div>
    </div>
@endsection
