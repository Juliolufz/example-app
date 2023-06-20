@extends('layouts.plantilla')

@section('title')
    <h1>SUBCATEGORIAS</h1>
@endsection

@section('content')
@can('subcategorias.create')
<a href="{{route('subcategorias.create')}}" class="btn btn-success mb-4">CREAR</a>
@endcan
<div class="card">
    <div class="card-body">
        <div class="container">
            <div class="row">
                @foreach($subcategorias as $subcategoria)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ $subcategoria->imagen }}" class="card-img-top" alt="{{ $subcategoria->nombre }}">
                        <div class="card-body">
                            <h4 class="card-title">{{ $subcategoria->cnombre }}</h4>
                            <p class="card-text">{{ $subcategoria->descripcion }}</p>
                            <p class="card-price"> {{ $subcategoria->nombre }}</p>
                            @can('subcategorias.edit')
                            <a href="{{ route('productos.edit', $subcategoria->id) }}"
                                class="btn btn-primary btn-sm mr-3">EDITAR</a>
                            @endcan
                            @can('subcategorias.destroy')
                            <button class="btn btn-danger btn-sm eliminar" data-id="{{ $subcategoria->id }}">ELIMINAR</button>
                            @endcan
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

@section('jst')
<script>
    $('.eliminar').click(function() {
        var id = $(this).data('id'); // Obtener el valor del atributo data-id
        Swal.fire({
            title: '¿Estás seguro de hacer eso?',
            text: "Recuerda que esta acción no se puede deshacer. Te cobrarán 50 millones de pesos",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡Sí, borrar!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'DELETE',
                    url: "{{ route('subcategorias.destroy', ':id') }}".replace(':id', id),
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(respuesta) {
                        Swal.fire(
                            'Éxito',
                            'Cambios efectuados correctamente',
                            'success'
                        );
                        // Eliminar el elemento eliminado de la interfaz
                        $(`.eliminar[data-id=${id}]`).closest('.col-md-4').remove();
                    },
                    error: function(respuesta) {
                        Swal.fire(
                            'Error',
                            'Error desconocido',
                            'error'
                        );
                    }
                });
            }
        });
    });
</script>
@stop
