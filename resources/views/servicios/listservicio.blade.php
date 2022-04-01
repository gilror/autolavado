@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Dashboard</h1>
    @stop
    @section('content')
<h1>Listar Servicios</h1>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Descripción</th>
      <th scope="col">Costo</th>
      <th scope="col">Estatus</th>
      <th scope="col">Fecha Registro</th>
    </tr>
  </thead>
  <tbody>
      @foreach($servicios as $servicio)
    <tr>
      <th>{{$servicio->idservicio}}</th>
      <th>{{$servicio->descripcion}}</th>
      <th>{{$servicio->costo}}</th>
      <th>{{$servicio->estatus}}</th>
      <th>{{$servicio->fechareg}}</th>
      <th><form action="{{ url('/servicios/'.$servicio->idservicio)}}" method="post">
          @csrf
          {{method_field('DELETE')}}
          <button type="submit" class="btn btn-danger" onclick="return confirm('¿Quires Borrar?')">Borrar</button>
          </form>
          <form action="" method="post">
            <input type="submit" onclick="return confirm('¿Quires Editar?')" value="Editar">
          </form></th>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
