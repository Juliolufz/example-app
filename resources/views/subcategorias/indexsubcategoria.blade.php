@extends('layouts.plantilla')

@section('title')
    <h1>SUBCATEGORIAS</h1>
@endsection


@section('content')
@can('subcategorias.edit')
<a href="{{route('subcategorias.create')}}" class="btn btn-success mb-4">CREAR</a>
@endcan
<div class="card">
    <div class="card-body">
<table class="table" id="Table">
      <thead>
        <tr>
          <th scope="col">CATEGORIA</th>
          <th scope="col">NOMBRE</th>
          <th scope="col">DESCRIPCION</th>
          <th scope="col">BOTONES</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($subcategorias as $subcategoria)
        <tr>
          <td>{{$subcategoria->cnombre}}</td>
          <td>{{$subcategoria->nombre}}</td>
          <td>{{$subcategoria->descripcion}}</td>
          <td>

            @can('subcategorias.edit')
            <a href="{{route('subcategorias.edit',$subcategoria->id)}}" class="btn btn-primary btn-sm mr-3">EDITAR</a>
            @endcan
            @can('subcategorias.edit')
            <span type="submit" class="btn btn-danger btn-sm eliminar">ELIMINAR</span>
            @endcan

          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
</div>
</div>


@endsection
@section('jst')
  <script>

    $('.eliminar').click(function() {

      tabla = $('#Table').DataTable();
      fila = $(this);


      Swal.fire({
        title: 'Estas seguro de hacer eso?',
        text: "Recuerda esta Accion no se puede recuperar le cobro 50 millones de pesos",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, borrar!'
      }).then((result) => {
          if (result.isConfirmed) {

            let id = $(this).closest('td').find('input[type=hidden]').val();


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
                      )
                      tabla.row(fila.parents('tr')).remove().draw();

                  },
                  error: function(respuesta) {
                      Swal.fire(
                          'Error',
                          'Error desconocido',
                          'error'
                      )
                  }
              });
          }
      })
    });
</script>

<script>
    $(document).ready(function () {
     $('#Table').DataTable();
    });

</script>

@stop
