@extends('layouts.plantilla')


@section('title')
    <h1>Crear Subcategorias</h1>
@endsection

@section('content')

<form action="{{ route('categorias.store')}}" method="POST">
    @csrf
    <div class="mb-3 mt-3">
      <label for="" class="form-label">NOMBRE</label>
      <input type="text" class="form-control" id="nombre" name="nombre" required >
    </div>
    <div class="mt-3">
        <label for="" class="form-label">DESCRIPCION</label>
        <input type="text" class="form-control" id="cantidad" name="descripcion" required >
      </div>

    <div class="mt-5">
        <button type="submit" class="btn btn-success mr -4 ">GUARDAR</button>
        <a href="{{route('categorias.index')}}" class="btn btn-danger">CANCELAR</a>
    </div>

  </form>

@endsection
