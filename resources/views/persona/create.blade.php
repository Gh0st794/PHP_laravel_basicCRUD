@extends('persona.layout')
@section('content')
<div class="card">
  <div class="card-header">Nueva persona</div>
  <div class="card-body">
      
      <form action="{{ url('persona') }}" method="post">
        {!! csrf_field() !!}
        <label>Primer nombre</label></br>
        <input type="text" name="primernombre" id="primernombre" class="form-control"></br>
        <label>Segundo nombre</label></br>
        <input type="text" name="segundonombre" id="segundonombre" class="form-control"></br>
        <label>Primer apellido</label></br>
        <input type="text" name="primerapellido" id="primerapellido" class="form-control"></br>
        <label>Segundo apellido</label></br>
        <input type="text" name="segundoapellido" id="segundoapellido" class="form-control"></br>
        <label>Cedula</label></br>
        <input type="text" name="cedula" id="cedula" class="form-control"></br>
        <label>Fecha de nacimiento</label></br>
        <input type="date" name="fechanacimiento" id="fechanacimiento" class="form-control"></br>
        <input type="submit" value="Guardar" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop