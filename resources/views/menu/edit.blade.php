@extends("theme/principal")
@section('titulo')
Registro de Menu
@endsection
@section('contenido')
<div class="container">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
  <div class="card">
    <div class="card-header">
      <h4>Editar el menu</h4>
    </div>
    <form action="{{url('/menu/'.$menu->id)}}" method="POST">
      {{ csrf_field() }}
      {{ method_field('PATCH') }}
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="nombre"><i class="fa fa-address-card" aria-hidden="true"></i><b>{{' NOMBRE PLATO '}}</b></label>
              <input class="form-control" type="text" id="nombre" name="nombre" value="{{$menu->nombre}}"
                placeholder="Nombre de menu">
            </div>
          </div>
          <div class="col-md-6 ml-auto">
            <div class="form-group">
              <label for="cantidad"><i class="fa fa-list-ol" aria-hidden="true"></i><b> {{' CANTIDAD '}} </b></label>
              <input class="form-control" type="number" name="cantidad" id="cantidad" value="{{$menu->cantidad}}" placeholder="Cantidad a registrar">
            </div>
          </div>
          <div class="col-md-12 ml-auto">
            <div class="form-group">
              <label for="fecha_siembra"><i class="fa fa-calendar" aria-hidden="true"></i><b> {{' FECHA '}} </b></label>
              <input class="form-control" type="date" name="fecha" id="fecha" value="{{$menu->fecha}}">
            </div>
          </div>
        </div>
        <button type="submit" class='btn btn-primary'>Editar</button>
      </div>
    </form>
  </div>
</div>

@endsection