<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
      @foreach($clientes as $cliene)
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
      <th><form action="" methosd="post">
            <input type="submit" onclick="return confirm('¿Quires Borrar?')" value="Borrar">
          </form>
          <form action="" methosd="post">
            <input type="submit" onclick="return confirm('¿Quires Editar?')" value="Editar">
          </form></th>
    </tr>
    @endforeach
  </tbody>
</table>
