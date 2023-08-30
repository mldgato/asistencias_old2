@extends('adminlte::page')


@section('content_header')
    <div class="row">
        <div class="col-sm-12 text-center">
            <img src="https://segurosgyt.com.gt/o/seguros-theme/images/logoSegundoHeader.png" class="img-fluid" alt="">
        </div>
    </div>
    <h1>Servio Boleta: {{ $service->id }}</h1>
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
                        <p class="form-control">{{ $service->insurance->insuredFirstName }}</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label>Apellidos:</label>
                        <p class="form-control">{{ $service->insurance->insuredLastName }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Vehículo:</label>
                        <p class="form-control">{{ $service->insurance->vehicleBrand }}</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Línea:</label>
                        <p class="form-control">{{ $service->insurance->vehicleLine }}</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Tipo:</label>
                        <p class="form-control">{{ $service->insurance->vehicleType }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Año:</label>
                        <p class="form-control">{{ $service->insurance->vehicleYear }}</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Color:</label>
                        <p class="form-control">{{ $service->insurance->vehicleColor }}</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Placa:</label>
                        <p class="form-control">{{ $service->insurance->vehiclePlate }}</p>
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
                        <p class="form-control">{{ $service->Operator }}</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Fecha:</label>
                        <p class="form-control">{{ $service->assignmentDate }}</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Hora asinación:</label>
                        <p class="form-control">{{ $service->assignmentTime }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-3">
                    <p class="form-control">{{ $service->serviceType }}</p>
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
                        <p class="form-control">{{ $service->supplier->company }}</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label>Técnico:</label>
                        <p class="form-control">{{ $service->expert }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Hora de contacto:</label>
                        <p class="form-control">{{ $service->contactTime }}</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Hora de finalización:</label>
                        <p class="form-control">{{ $service->endingTime }}</p>
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
                        <p class="form-control">{{ $service->beneficiary }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Dirección de la asistencia:</label>
                        <p class="form-control">{{ $service->address }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-3">
                    <div class="form-check">
                        <p class="form-control">{{ $service->serviceWork }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <h2><i class="fas fa-clipboard-list"></i> Daños pre existentes</h2>
        </div>
        <div class="card-body">
            <div class="row">
                @php
                    if($service->pre_existingDamage == 'Puerta derecha'){
                @endphp
                    <img src="{{ asset('images/PuertaDerecha.jpg') }}" alt="Imagen 1" width="200" height="200">
                @php
                    }
                @endphp
                @php
                    if($service->pre_existingDamage == 'Neumático'){
                @endphp
                    <img src="{{ asset('images/Neumatico.jpg') }}" alt="Imagen 3" width="200" height="200">
                @php
                    }
                @endphp
                @php
                    if($service->pre_existingDamage == 'Puerta izquierda'){
                @endphp
                <img src="{{ asset('images/Izquierda.jpg') }}" alt="Imagen 2" width="200" height="200">
                @php
                    }
                @endphp
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
                        <p class="form-control">{{ $service->maneuveringCost }}</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Costo total:</label>
                        <p class="form-control">{{ $service->TotalCost }}</p>
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
                <div class="col-sm-12 col-md-4">
                    <img src="https://www.supercars.net/blog/wp-content/uploads/2021/08/crash-ferrari-f.jpg" alt="" class="img-fluid" width="200" height="200">
                </div>
                <div class="col-sm-12 col-md-4">
                    <img src="https://mysterio.yahoo.com/mysterio/api/72CAA6AC3AE5D10010CADC63B7EBE36D25FA8360C76C9E63228E87E8BB7414F2/autoblog/resizefill_w1200_h720;quality_85;format_webp;cc_31536000;/https://o.aolcdn.com/images/dims3/GLOB/legacy_thumbnail/800x450/format/jpg/quality/85/http://s.aolcdn.com/commerce/blogcdn/www.autoblog.com/media/2011/12/japanferrarisaccident-opt.jpg" alt="" class="img-fluid" width="200" height="200">
                </div>
                <div class="col-sm-12 col-md-4">
                    <img src="https://s1.cdn.autoevolution.com/images/news-gallery-860x/here-are-the-worlds-most-expensive-heart-breaking-ferrari-crashes-thumbnail_4.jpg" alt="" class="img-fluid" width="200" height="200">
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
                        <textarea name="" id="" rows="10" class="form-control" @readonly(true)>{{ $service->notes }}</textarea>
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
                        <img src="https://static.cdn.wisestamp.com/wp-content/uploads/2020/08/Michael-Jordan-personal-autograph.png" alt="" class="img-fluid" width="200" height="200">
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
@stop
