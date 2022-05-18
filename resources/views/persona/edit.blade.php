@extends('persona.layout')
@section('content')
<div class="card">
  <div class="card-header">Editar persona</div>
  <div class="card-body">
      
      <form action="{{ url('persona/' .$personas->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$personas->id}}" id="id" />

        <label>Primer nombre</label></br>
        <input type="text" name="primernombre" id="primernombre" value="{{$personas->primernombre}}" class="form-control"></br>
        <label>Segundo nombre</label></br>
        <input type="text" name="segundonombre" id="segundonombre" value="{{$personas->segundonombre}}" class="form-control"></br>
        <label>Primer apellido</label></br>
        <input type="text" name="primerapellido" id="primerapellido" value="{{$personas->primerapellido}}" class="form-control"></br>
        <label>Segundo apellido</label></br>
        <input type="text" name="segundoapellido" id="segundoapellido" value="{{$personas->segundoapellido}}" class="form-control"></br>
        <label>cedula</label></br>
        <input type="text" name="cedula" id="cedula" value="{{$personas->cedula}}" class="form-control"></br>
        <label>Fecha de nacimiento</label></br>
        <input type="date" name="fechanacimiento" id="fechanacimiento" value="{{$personas->fechanacimiento}}" class="form-control"></br>

        <input type="submit" value="Actualizar" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop