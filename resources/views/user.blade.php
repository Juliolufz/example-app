@extends('layouts.plantilla')

<br>
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="container">
                <div class="row">
                    @foreach ($users as $user)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="{{$user->file}}" class="img-circle elevation-2  mx-auto d-block" alt="{{ $user->nombre }}" width="200px" heigt="200px">
                            <div class="card-body">
                                <h4 class="card-title">{{ $user->name }}</h4>
                                <p class="card-text">{{ $user->email }}</p>
                                <p class="card-text">{{ $user->roles }}</p>
                                <td>
                                        <a href="{{ route('users.edit', $user->id) }}"
                                            class="btn btn-primary btn-sm mr-3">EDITAR</a>
                                </td>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
