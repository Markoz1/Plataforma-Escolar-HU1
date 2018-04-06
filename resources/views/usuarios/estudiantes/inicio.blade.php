@extends('Layout.index')
@section('content')
<div class="card">
        <h4 class="card-header">Listado de Estudiantes</h4>
        <div class="card-body">
            @if(session('mensaje'))
				<div class="alert alert-dismissible alert-success">
					<button type="button" class="close" data-dismiss="alert">×</button>
					{{ session('mensaje') }}
				</div>
			@endif
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">C.I</th>
                            <th scope="col">Apellido Paterno</th>
                            <th scope="col">Apellido Materno</th>
                            <th scope="col">Nombre</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($estudiantes as $estudiante)
                        <tr>
                            <th scope="row">{{$estudiante->ci}}</th>
                            <td>{{$estudiante->apellido_paterno}}</td>
                            <td>{{$estudiante->apellido_materno}}</td>
                            <td>{{$estudiante->nombre}}</td>
                        </tr>
                    @endforeach
                    </tbody>                
                </table>
            </div>
        </div>
    </div>   
@endsection