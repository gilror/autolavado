@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Dashboard</h1>
    @stop
    @section('content')
<h1>Listar Ventas</h1>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Fecha</th>
      <th scope="col">ID Vehiculo</th>
      <th scope="col">ID Cajero</th>
      <th scope="col">ID Trabajador</th>
      <th scope="col">ID Servicio</th>
      <th scope="col">Estatus</th>
    </tr>
  </thead>
  <tbody>
      @foreach($ventas as $venta)
    <tr>
      <th>{{$venta->idventas}}</th>
      <th>{{$venta->fecha}}</th>
      <th>{{$venta->idvehiculo}}</th>
      <th>{{$venta->idcajero}}</th>
      <th>{{$venta->idtrabajador}}</th>
      <th>{{$venta->idservicio}}</th>
      <th>{{$venta->estatus}}</th>
      <th><form action="{{ url('/ventas/'.$venta->idventa)}}" method="post">
          @csrf
          {{method_field('DELETE')}}
          <button type="submit" class="btn btn-danger" onclick="return confirm('¿Quires Borrar?')">Borrar</button>
          <button type="button" class="btn btn-warning" type="submit" onclick="return confirm('¿Quires Editar?')"
          value="Editar"><i class="fas fa-fw fa-pen"></i></button>
          </form></th>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
