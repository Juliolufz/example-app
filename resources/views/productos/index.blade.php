@extends("layouts.plantilla")

@section('content')
<br>
@can('productos.create')
<a href="{{route('productos.create')}}" class="btn btn-success mb-4">CREAR</a>
@endcan

<div class="card">
    <div class="card-body">
        <div class="container">
            <div class="row">
                @foreach($productos as $producto)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ $producto->imagen }}" class="card-img-top" alt="{{ $producto->nombre }}">
                        <div class="card-body">
                            <h4 class="card-title">{{ $producto->nombre }}</h4>
                            <p class="card-text">{{ $producto->descripcion }}</p>
                            <p class="card-price">${{ $producto->precio }}</p>
                            <p class="card-price">categoria: {{ $producto->cnombre }}</p>
                            <p class="card-price">subcategoria: {{ $producto->subnombre }}</p>
                            @can('productos.edit')
                            <a href="{{ route('productos.edit', $producto->id) }}"
                                class="btn btn-primary btn-sm mr-3">EDITAR</a>
                        @endcan
                        @can('productos.destroy')
                            <input type="hidden" value="{{ $producto->id }}">
                            <span class="btn btn-danger btn-sm eliminar"data-id="{{ $producto->id }}">ELIMINAR</span>
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
                    url: "{{ route('productos.destroy', ':id') }}".replace(':id', id),
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
