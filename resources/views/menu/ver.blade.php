@extends("theme/principal")
@section('titulo')
Listado Menu
@endsection
@section('contenido')
@if (session('status'))
<div class="alert alert-danger" role="alert">
  {{ session('status') }}
</div>
@endif
<div>
  <div class="card card-success">
    <div class="card-header">
      <h3 class="card-title">Listado de Menu</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
      <table id="datos" class="table table-hover">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Fecha</th>
            <th>Evento</th>
          </tr>
        </thead>
        <tbody>
          @foreach(menu() as $menus)
          <tr>
            <td>{{$menus->id}}</td>
            <td>{{$menus->nombre}}</td>
            <td>{{$menus->cantidad}}</td>
            <td>{{$menus->fecha}}</td>
            <td>
              <form action="{{url('/menu',$menus->id) }}" method="POST">
                {{ csrf_field() }}
                {{method_field('DELETE')}}
                <button class="btn btn-primary" type="submit" onclick="return confirm('Borrar')">Borrar</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

</div>
@endsection