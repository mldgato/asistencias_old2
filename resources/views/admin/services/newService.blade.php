@extends('adminlte::page')

@section('content_header')
    <h1>Nuevo servicio Póliza: {{ $insurance->policy }}</h1>
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
                        <p class="form-control">{{ $insurance->insuredFirstName }}</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label>Apellidos:</label>
                        <p class="form-control">{{ $insurance->insuredLastName }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Vehículo:</label>
                        <p class="form-control">{{ $insurance->vehicleBrand }}</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Línea:</label>
                        <p class="form-control">{{ $insurance->vehicleLine }}</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Tipo:</label>
                        <p class="form-control">{{ $insurance->vehicleType }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Año:</label>
                        <p class="form-control">{{ $insurance->vehicleYear }}</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Color:</label>
                        <p class="form-control">{{ $insurance->vehicleColor }}</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Placa:</label>
                        <p class="form-control">{{ $insurance->vehiclePlate }}</p>
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
                        <label>Fecha:</label>
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
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <h2><i class="fas fa-info"></i> Datos generales del servicio de asistencia</h2>
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
                        <label>Dirección de la asustencia:</label>
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
    <div class="row">
        <div class="col text-center">
            <button class="btn btn-success bt-lg"><i class="fas fa-share-square"></i> Enviar</button>
        </div>
    </div>
    <br>
    <br>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
@stop
