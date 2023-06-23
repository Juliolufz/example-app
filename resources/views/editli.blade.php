@extends('layouts.plantilla');

@section('content')
    <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf()
        @method('PUT')
        <div class="mb-3 mt-3">
            <label for="" class="form-label">NOMBRE</label>
            <input type="text" class="form-control" id="name" name="name" required
                value="{{ $user->name }}">
        </div>
        <div class="mt-3">
            <label for="" class="form-label">CORREO</label>
            <input type="text" class="form-control" id="email" name="email" required
                value="{{ $user->email }}">
        </div>
        <div class="mt-2">
            <label class="form-label">ROLES</label>
        <select  class="form-control" name="rol" id="rol" required>
            <option disabled selected>selecciona un rol</option>
            @foreach ($role as $rol)
                <option value="{{$rol->id}}"required>{{$rol->name}}</option>
            @endforeach
        </select>
       </div>
       <div class="mt-3">
        <label class="form-label">Suba su foto</label>
        <input id="file"type="file" class="form-control" name="file" accept="image/*">
       </div>
       <div class="mt-5">
        <button type="submit" class="btn btn-success mr -4 ">Guardar</button>
        <a href="{{ route('users.index') }}" class="btn btn-danger">Cancelar</a>
    </div>
    </form>
@endsection
