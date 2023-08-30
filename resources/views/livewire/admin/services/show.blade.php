@extends('adminlte::page')

@section('css')
    <style>
        .custom-checkbox img {
            width: 100px;
            height: 100px;
            border: 2px solid transparent;
            cursor: pointer;
        }

        .custom-checkbox input[type="checkbox"]:checked+img {
            border-color: #007bff;
        }
    </style>
@stop

@section('content_header')
    <div class="row">
        <div class="col-sm-12 text-center">
            <img src="https://segurosgyt.com.gt/o/seguros-theme/images/logoSegundoHeader.png" class="img-fluid" alt="">
        </div>
    </div>
    <h1>Póliza: {{ $service->insurance->policy }}</h1>
@stop

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <h2><i class="fas fa-id-card"></i> Información del asegurado</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label>Nombres:</label>
                        <p class="form-control">{{  }}</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label>Apellidos:</label>
                        <p class="form-control">{{  }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Vehículo:</label>
                        <p class="form-control">{{  }}</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Línea:</label>
                        <p class="form-control">{{  }}</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Tipo:</label>
                        <p class="form-control">{{  }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Año:</label>
                        <p class="form-control">{{  }}</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Color:</label>
                        <p class="form-control">{{  }}</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Placa:</label>
                        <p class="form-control">{{  }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <h2><i class="fab fa-wpforms"></i> Boleta</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Operador:</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Fecha:</label>
                        <input type="date" class="form-control" value="{{ date('Y-m-d') }}" readonly>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Hora asinación:</label>
                        <input type="text" class="form-control" value="{{ date('H:i:s') }}" readonly>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Asixpress
                        </label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Vehículo asegurado
                        </label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Tercero
                        </label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Otro
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <h2><i class="fas fa-people-carry"></i> Proveedor</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label>Proveedor:</label>
                        <select name="" id="" class="form-control">
                            <option value="">- Seleccione -</option>
                            <option value="Proveedor 1">Proveedor 1</option>
                            <option value="Proveedor 2">Proveedor 2</option>
                            <option value="Proveedor 3">Proveedor 3</option>
                            <option value="Proveedor 4">Proveedor 4</option>
                            <option value="Proveedor 5">Proveedor 5</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label>Técnico:</label>
                        <select name="" id="" class="form-control">
                            <option value="">- Seleccione -</option>
                            <option value="Técnico 1">Técnico 1</option>
                            <option value="Técnico 2">Técnico 2</option>
                            <option value="Técnico 3">Técnico 3</option>
                            <option value="Técnico 4">Técnico 4</option>
                            <option value="Técnico 5">Técnico 5</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Hora de contacto:</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Hora de finalización:</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <h2><i class="fas fa-map-marked-alt"></i> Datos generales del servicio de asistencia</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Nombre del beneficiario:</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Dirección de la asistencia:</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Paso de corriente
                        </label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Abasto de combustible
                        </label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Cambio de llanta
                        </label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Apertura de vehículo
                        </label>
                    </div>
                </div>
            </div>
            {{--  --}}
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <h2><i class="fas fa-clipboard-list"></i> Daños pre existentes</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <label class="custom-checkbox">Puerta derecha <br>
                        <input type="checkbox" class="d-none">
                        <img src="{{ asset('images/PuertaDerecha.jpg') }}" alt="Imagen 1">
                    </label>
                </div>
                <div class="col-sm-12 col-md-4">
                    <label class="custom-checkbox">Puerta izquierda <br>
                        <input type="checkbox" class="d-none">
                        <img src="{{ asset('images/Izquierda.jpg') }}" alt="Imagen 2">
                    </label>
                </div>
                <div class="col-sm-12 col-md-4">
                    <label class="custom-checkbox">Neumático <br>
                        <input type="checkbox" class="d-none">
                        <img src="{{ asset('images/Neumatico.jpg') }}" alt="Imagen 3">
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <h2><i class="fas fa-plus-square"></i> Cargos extra</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Costo de maniobra:</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Costo total:</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <h2><i class="fas fa-images"></i> Fotografías</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12 col md-6">
                    <div class="form-group">
                        <label for="formFile" class="form-label">Elija las fotografías de su galería</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <h2><i class="fas fa-sticky-note"></i> Notas</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="">Información adicional:</label>
                        <textarea name="" id="" rows="10" class="form-control"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <h2><i class="fas fa-handshake"></i> Benficiario</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <p>Manifiesto que tanto mi vehículo como mi persona no ha sufrido pérdida o daño alguno y libero al
                        prestador de servicio y a Asistencia G&T, de cualquier reclamación o responsabilidad por el servicio
                        recibido.</p>
                    <p>Entiendo que Asistencia G&T y/o el proveedor de servicios, no se hace responsable de objetos
                        personales dejados u olvidados dentro del vehículo. </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Firma:</label><br>
                        <canvas id="firmaCanvas" height="200" style="border:1px solid #000;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <button class="btn btn-success bt-lg"><i class="fas fa-share-square"></i> Enviar</button>
        </div>
    </div>
    <br>
    <br>
@stop



@section('js')
@stop
