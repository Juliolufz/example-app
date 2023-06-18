@extends("layouts.plantilla")

@section('content')

@can('categorias.create')
<a href="{{route('categorias.create')}}" class="btn btn-success mb-4">CREAR</a>
@endcan
<div class="card">
<div class="card-body">
<table class="table table-striped" id="Table">
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">descripcion</th>
        <th scope="col">BOTONES</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($categorias as $categoria)
        <tr>
          <td>{{$categoria->nombre}}</td>
          <td>{{$categoria->descripcion}}</td>
          <td>
            @can('categorias.edit')
            <a href="{{route('categorias.edit',$categoria->id)}}" class="btn btn-primary btn-sm mt-2" >EDITAR</a>
            <input type="hidden" value="{{$categoria->id}}">
            @endcan
            @can('categorias.destroy')
            <span type="submit" class="btn btn-danger btn-sm mt-2 eliminar">ELIMINAR</span>
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
                  url: "{{ route('categorias.destroy', ':id') }}".replace(':id', id),
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

