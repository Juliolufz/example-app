@extends('layouts.plantilla')


@section('title')
    <h1>Editar Categoria</h1>
@endsection

@section('content')

<form action="{{route('categorias.update',$categoria->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3 mt-3">
      <label for="" class="form-label">NOMBRE</label>
      <input type="text" class="form-control" id="nombre" name="nombre" required min="1" max="50" value="{{$categoria->nombre}}">
    </div>
    <div class="mt-3">
      <label for="" class="form-label">DESCRIPCION</label>
      <input type="text" class="form-control" id="descripcion" name="descripcion" required value="{{$categoria->descripcion}}">
    </div>

    <div class="mb-3 mt-3">
        <label class="form-label">FOTO DE PRODUCTO</label>
        <input id="file" type="file" class="form-control" name="file"  accept="image/*" >
      </div>

    <div class="mt-5">
        <button type="submit" class="btn btn-success mr-2">GUARDAR</button>
        <a href="{{route('categorias.index')}}" class="btn btn-danger">CANCELAR</a>
    </div>

  </form>

@endsection
