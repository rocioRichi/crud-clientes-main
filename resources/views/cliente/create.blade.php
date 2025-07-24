@extends('layouts.main')

@section('titulo', 'Insertar')

@section('cabecera')
    <section class="pt-5 container">
        <div class="row py-lg-5">
            <h1 class="display-4 fw-bold lh-1 mb-3">Insertar cliente</h1>
            <p class="col-lg-10 fs-4">
                Desde este formulario puedes crear un cliente nuevo
            </p>
        </div>
    </section>
@endsection

@section('contenido')
    @if ($errors->any())
        <div class="row mt-3">
            <h2>Errores en el formulario</h2>
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    <div class="row mt-3">
        <div class="col-lg-10 mt-2 mx-auto">
            <form action="{{ route('cliente.store') }}" method="post" class="p-4 p-md-5 border rounded-3 bg-light">
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}">
                </div>
                <div>
                    @error('nombre')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos" name="apellidos"
                        value="{{ old('apellidos') }}">
                </div>
                <div>
                    @error('apellidos')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección</label>
                    <textarea name="direccion" id="direccion" cols="30" rows="10" name="direccion" class="form-control">{{ old('direccion') }}</textarea>
                </div>
                <div>
                    @error('direccion')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" value="{{ old('telefono') }}">
                </div>
                <div>
                    @error('telefono')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                </div>
                <div>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Añadir cliente</button>

        </div>
    @endsection
