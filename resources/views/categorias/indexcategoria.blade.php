@extends("layouts.plantilla")

@section('content')

@can('categorias.create')
<a href="{{route('categorias.create')}}" class="btn btn-success mb-4">CREAR</a>
@endcan
<div class="card">
    <div class="card-body">
        <div class="container">
            <div class="row">
                @foreach($categorias as $categoria)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ $categoria->file }}" class="card-img-top" alt="{{ $categoria->nombre }}" width="100px" height="300px">
                        <div class="card-body">

                            <p class="card-text">{{ $categoria->descripcion }}</p>
                            <p class="card-price"> {{ $categoria->nombre }}</p>
                            @can('categorias.edit')
                            <a href="{{ route('categorias.edit', $categoria->id) }}"
                                class="btn btn-primary btn-sm mr-3">EDITAR</a>
                        @endcan
                        @can('categorias.destroy')
                            <input type="hidden" value="{{ $categoria->id }}">
                            <span class="btn btn-danger btn-sm eliminar"data-id="{{ $categoria->id }}">ELIMINAR</span>
                        @endcan
                        </div>
                    </div>
                </div>
                @endforeach
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
                    url: "{{ route('categorias.destroy', ':id') }}".replace(':id', id),
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

<script>
    $(document).ready(function () {
     $('#Table').DataTable();
    });

</script>

@stop

