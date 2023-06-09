@extends('layouts.plantilla')


@section('title')
    <h1>Editar Producto</h1>
@endsection

@section('content')

<form action="{{route('users.update',$user->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3 mt-3">
      <label for="" class="form-label">id</label>
      <input type="number" class="form-control" id="nombre" name="id" required  value="{{$user->id}}">
    </div>
    <div class="mt-3">
        <label for="" class="form-label" >name</label>
        <input type="text" class="form-control" id="precio" name="name" required value="{{$user->name}}">
    </div>
    <div class="mt-3">
      <label for="" class="form-label">email</label>
      <input type="text" class="form-control" id="cantidad" name="email" required value="{{$user->email}}">
    </div>

    <div class="mb-3 mt-3">
        <label for="" class="form-label">Roles</label>
        <select  class="form-control" id="rol" name="rol" required>
          <option value="" disabled selected>Selecciona un rol </option>
        @foreach ($roles as $rol)
            <option value="{{$rol->id}}" required>{{$rol->name}}</option>
        @endforeach
        </select>
    </div>


    <div class="mt-5">
        <button type="submit" class="btn btn-success mr -4 ">GUARDAR</button>
        <a href="{{route('users.index')}}" class="btn btn-danger">CANCELAR</a>
    </div>

  </form>


@endsection
