@extends('adminlte::page')

@section('content_header')
    <div class="row">
        <div class="col text-center">
            <img src="https://notefalla.segurosgyt.com.gt/productos/images/logoSegundoHeader.png" class="img-fluid">
        </div>
    </div>
    <h1>Proveedores <i class="fas fa-people-carry"></i></h1>
@stop

@section('content')
    @livewire('admin.stocktaking.suppliers.show-suppliers')
@stop

@section('footer')
    <div class="d-flex justify-content-end">
        <b>Version</b> 1.0
    </div>
    <strong>Aplicación de asistencias - {{ date('Y') }}. </strong>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
