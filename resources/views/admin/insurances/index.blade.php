@extends('adminlte::page')

@section('content_header')
    <h1>Pólizas</h1>
@stop

@section('content')
    @livewire('admin.insurances.show-insurance')
@stop

@section('footer')
    <div class="d-flex justify-content-end">
        <b>Version</b> 1.0
    </div>
    <strong>Aplicación de asistencias - {{ date('Y') }}. </strong>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
@stop
