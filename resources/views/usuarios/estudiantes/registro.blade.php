@extends('Layout.index')
@section('content')
<div class="card">
    <h4 class="card-header">Registro</h4>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <h6 class="card-title mb-4">1. Apellidos y Nombres</h6>
                <form action="">
                    <div class="form-group row">
                        <label for="apellido_paterno" class="col-md-4 col-form-label">Apellido Paterno</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="apellido_paterno">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="apellido_materno" class="col-md-4 col-form-label">Apellido Materino</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="apellido_materno">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nombre" class="col-md-4 col-form-label">Nombre</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="nombre">
                        </div>
                    </div>
                </form>
                <hr class="my-4">
                <h6 class="card-title mb-4">2. Lugar de Nacimiento</h6>
            </div>
            <div class="col-md-6">
                <h6 class="card-title mb-4">3. Codigo Estudiantil</h6>
                <h6 class="card-title mb-4">4. Documento de Identificacion</h6>
            </div>
        </div>        
        <a href="#" class="btn btn-primary">Registrar</a>
    </div>
</div>   
@endsection
