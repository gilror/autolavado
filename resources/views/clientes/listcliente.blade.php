@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Dashboard</h1>
    @stop
    @section('content')
<h1>Listar Clientes</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Primer Apellido</th>
      <th scope="col">Segundo Apellido</th>
      <th scope="col">Direccion</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Correo</th>
      <th scope="col">Fecha Registro</th>
      <th scope="col">Estatus</th>
    </tr>
  </thead>
  <tbody>
      @foreach($clientes as $cliente)
    <tr>
      <th>{{$cliente->idcliente}}</th>
      <th>{{$cliente->nombre}}</th>
      <th>{{$cliente->apaterno}}</th>
      <th>{{$cliente->amaterno}}</th>
      <th>{{$cliente->direccion}}</th>
      <th>{{$cliente->telefono}}</th>
      <th>{{$cliente->correo}}</th>
      <th>{{$cliente->fechareg}}</th>
      <th>{{$cliente->estatus}}</th>
      <th><form action="{{ url('/clientes/'.$cliente->idcliente)}}" method="post">
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
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>console.log('Hi')</script>
@stop
