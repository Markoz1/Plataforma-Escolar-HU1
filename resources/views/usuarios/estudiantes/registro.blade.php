@extends('Layout.index')
@section('content')
<div class="card">
    <h4 class="card-header">Registro</h4>
    <div class="card-body">
        <form action="{{ url('estudiantes') }}" method="POST">
            {{csrf_field()}}
            <div class="row">   
                <div class="col-md-6">
                    <h6 class="card-title mb-4">1. Apellido(s) y Nombre(s)</h6>                
                        <div class="form-group row">
                            <label for="apellido_paterno" class="col-md-4 col-form-label">Apellido Paterno</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="apellido_paterno" id="apellido_paterno">
                            </div>
                        </div>
                        <div class="form-group row my-4">
                            <label for="apellido_materno" class="col-md-4 col-form-label">Apellido Materno</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control"  name="apellido_materno" id="apellido_materno">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label">Nombre(s)</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="nombre" id="nombre">
                            </div>
                        </div>
                    <hr class="my-4">
                    <h6 class="card-title mb-4">2. Lugar de Nacimiento</h6>
                        <div class="form-group row">
                            <label for="pais" class="col-md-4 col-form-label">País</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="pais" id="pais">
                            </div>
                        </div>
                        <div class="form-group row mt-4">
                            <label for="departamento" class="col-md-4 col-form-label">Departamento</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="departamento" id="departamento">
                            </div>
                        </div>
                </div>
                <div class="col-md-6">
                    <h6 class="card-title mb-4">3. Documento de Identificación</h6>
                        <div class="form-group row">
                            <label for="ci" class="col-md-4 col-form-label">C.I.</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="ci" id="ci">
                            </div>
                        </div>
                    <hr class="my-4">
                    <div class="row">
                        <div class="col-md-8 col-lg-6">
                            <h6 class="card-title mb-2">4. Fecha de Nacimiento</h6>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento">
                                    </div>
                                </div>   
                        </div>
                        <div class="col-md-4 col-lg-6">
                            <h6 class="card-title mb-2">5. Sexo</h6>                        
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <select class="form-control" name="sexo" id="sexo">
                                            <option>Femenino</option>
                                            <option>Masculino</option>
                                        </select>
                                    </div>
                                </div>   
                        </div>  
                    </div>
                    <hr class="mt-3">
                    <h6 class="card-title mb-2">6. Dirección del estudiante</h6>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="direccion" id="direccion">
                            </div>
                        </div>
                    <hr class="my-4">
                    <h6 class="card-title mb-2">7. Teléfono o celular</h6>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="telefono" id="telefono">
                        </div>
                    </div>     
                </div>
            </div>
            <div class="mt-3 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
            </div>            
        </form>      
    </div>
</div>   
@endsection
