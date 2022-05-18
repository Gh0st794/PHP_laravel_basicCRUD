@extends('persona.layout')
@section('content')
<div class="card">
  <div class="card-header">Persona</div>
  <div class="card-body">
  
        <div class="card-body">        
        <p class="card-title">Primer nombre : {{ $personas->primernombre }}</p>
        <p class="card-text">Segundo nombre : {{ $personas->segundonombre }}</p>
        <p class="card-text">Primer apellido : {{ $personas->primerapellido }}</p>
        <p class="card-text">Segundo apellido : {{ $personas->segundoapellido }}</p>
        <p class="card-text">Cedula : {{ $personas->cedula }}</p>
        <p class="card-text">Fecha de nacimiento : {{ $personas->fechanacimiento }}</p>
        <p class="card-text">Edad : {{ $edad }}</p>
        
  </div>
      
    </hr>
  
  </div>
</div>