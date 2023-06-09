@extends('layouts.plantilla')

@section('content')
    <h1>usuario </h1>

    <div class="card">
        <div class="card-body">
            <table class="table  table-striped" id="Table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">nombre</th>
                        <th scope="col">email</th>
                        <th scope="col">roles</th>
                        <th scope="col">botones</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id}}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->roles }}</td>
                            <td>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('users.edit', $user->id) }}"
                                        class="btn btn-primary btn-sm mr-3">EDITAR</a>
                                    <button type="submit" class="btn btn-danger btn-sm">ELIMINAR</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('jst')
<script>
    $(document).ready(function () {
     $('#Table').DataTable();
    });

</script>
@stop
