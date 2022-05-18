@extends('persona.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Personas CRUD</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/persona/create') }}" class="btn btn-success btn-sm" title="Agregar persona">
                            <i class="fa fa-plus" aria-hidden="true"></i> Crear persona
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Primer nombre</th>
                                        <th>Segundo nombre</th>
                                        <th>Primer apellido</th>
                                        <th>Segundo apellido</th>
                                        <th>Cedula</th>
                                        <th>Fecha de nacimiento</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($persona as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->primernombre }}</td>
                                        <td>{{ $item->segundonombre }}</td>
                                        <td>{{ $item->primerapellido }}</td>
                                        <td>{{ $item->segundoapellido }}</td>
                                        <td>{{ $item->cedula }}</td>
                                        <td>{{ $item->fechanacimiento }}</td>                                        
                                        <td>
                                            <a href="{{ url('/persona/' . $item->id) }}" title="Ver persona"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Mostrar</button></a>
                                            <a href="{{ url('/persona/' . $item->id . '/edit') }}" title="Editar persona"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                                            <form method="POST" action="{{ url('/persona' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Eliminar persona" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection