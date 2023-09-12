@extends('adminlte::page')

@section('css')

@stop

@section('content_header')
    <div class="row">
        <div class="col-sm-12 text-center">
            <img src="https://notefalla.segurosgyt.com.gt/productos/images/logoSegundoHeader.png" class="img-fluid"
                alt="">
        </div>
    </div>
    <h1>Nuevo servicio de grúa</h1>
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
                        <p class="form-control"></p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label>Apellidos:</label>
                        <p class="form-control"></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Vehículo:</label>
                        <p class="form-control"></p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Línea:</label>
                        <p class="form-control"></p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Tipo:</label>
                        <p class="form-control"></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Año:</label>
                        <p class="form-control"></p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Color:</label>
                        <p class="form-control"></p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Placa:</label>
                        <p class="form-control"></p>
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
            <h2><i class="fas fa-map-marked-alt"></i> Datos generales del servicio de asistencia</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12 col-md-8">
                    <div class="form-group">
                        <label>Nombre del beneficiario:</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label>Télefono/Celular:</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label>Lugar de la asistencia:</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label>Lugar de entrega:</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <h2><i class="fas fa-clipboard-list"></i> Inventario de vehículo</h2>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <tr>
                    <td>Lado</td>
                    <td>Derecho</td>
                    <td>Izquierdo</td>
                </tr>
                <tr>
                    <td>Antena</td>
                    <td><input type="checkbox" name="Antena" id=""></td>
                    <td><input type="checkbox" name="Antena" id=""></td>
                </tr>
                <tr>
                    <td>Lodera</td>
                    <td><input type="checkbox" name="Lodera" id=""></td>
                    <td><input type="checkbox" name="Lodera" id=""></td>
                </tr>
                <tr>
                    <td>Faldón trasero</td>
                    <td><input type="checkbox" name="Faldontrasero" id=""></td>
                    <td><input type="checkbox" name="Faldontrasero" id=""></td>
                </tr>
                <tr>
                    <td>Puerta delantera</td>
                    <td><input type="checkbox" name="Puertadelantera" id=""></td>
                    <td><input type="checkbox" name="Puertadelantera" id=""></td>
                </tr>
                <tr>
                    <td>Tapón de combustible</td>
                    <td><input type="checkbox" name="Taponcombustible" id=""></td>
                    <td><input type="checkbox" name="Taponcombustible" id=""></td>
                </tr>
                <tr>
                    <td>Vidrio delantero</td>
                    <td><input type="checkbox" name="Vidriodelantero" id=""></td>
                    <td><input type="checkbox" name="Vidriodelantero" id=""></td>
                </tr>
                <tr>
                    <td>Vidrio trasero</td>
                    <td><input type="checkbox" name="Vidriotrasero" id=""></td>
                    <td><input type="checkbox" name="Vidriotrasero" id=""></td>
                </tr>
                <tr>
                    <td>Vidrio p. delantero</td>
                    <td><input type="checkbox" name="VidrioPdelantero" id=""></td>
                    <td><input type="checkbox" name="VidrioPdelantero" id=""></td>
                </tr>
                <tr>
                    <td>Vidrio p. trasero</td>
                    <td><input type="checkbox" name="VidrioPtrasero" id=""></td>
                    <td><input type="checkbox" name="VidrioPtrasero" id=""></td>
                </tr>
                <tr>
                    <td>Chapa p. delantera</td>
                    <td><input type="checkbox" name="ChapaPdelantero" id=""></td>
                    <td><input type="checkbox" name="ChapaPdelantero" id=""></td>
                </tr>
                <tr>
                    <td>Espejo lateral</td>
                    <td><input type="checkbox" name="Espejolateral" id=""></td>
                    <td><input type="checkbox" name="Espejolateral" id=""></td>
                </tr>
                <tr>
                    <td>Llanta delantera</td>
                    <td><input type="checkbox" name="Llantadelantera" id=""></td>
                    <td><input type="checkbox" name="Llantadelantera" id=""></td>
                </tr>
                <tr>
                    <td>Llanta trasera</td>
                    <td><input type="checkbox" name="Llantatrasera" id=""></td>
                    <td><input type="checkbox" name="Llantatrasera" id=""></td>
                </tr>
                <tr>
                    <td>Plato delantero</td>
                    <td><input type="checkbox" name="Platodelantero" id=""></td>
                    <td><input type="checkbox" name="Platodelantero" id=""></td>
                </tr>
                <tr>
                    <td>Plato trasero</td>
                    <td><input type="checkbox" name="Platotrasero" id=""></td>
                    <td><input type="checkbox" name="Platotrasero" id=""></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <h2><i class="fas fa-car-crash"></i> Vehículo</h2>
        </div>
        <canvas id="canvas" class="img-fluid" style="max-width: 100%;" width="800" height="600"></canvas>
    </div>
    </div>
@stop

@section('js')
    <script>
        // Obtiene una referencia al canvas y al contexto 2D
        var canvas = document.getElementById("canvas");
        var ctx = canvas.getContext("2d");

        // Carga la imagen de fondo
        var background = new Image();
        background.src = "http://asistencias.test/images/Vehiculo.png";

        // Espera a que la imagen se cargue antes de dibujarla en el canvas
        background.onload = function() {
            // Dibuja la imagen de fondo en el canvas
            ctx.drawImage(background, 0, 0, canvas.width, canvas.height);

            // Variables para el dibujo
            var dibujando = false;
            var xAnterior, yAnterior;

            // Evento de inicio de dibujo
            canvas.addEventListener("mousedown", function(e) {
                dibujando = true;
                xAnterior = e.offsetX;
                yAnterior = e.offsetY;
            });

            // Evento de dibujo continuo
            canvas.addEventListener("mousemove", function(e) {
                if (!dibujando) return;
                var xActual = e.offsetX;
                var yActual = e.offsetY;

                ctx.beginPath();
                ctx.strokeStyle = "black";
                ctx.lineWidth = 2;
                ctx.moveTo(xAnterior, yAnterior);
                ctx.lineTo(xActual, yActual);
                ctx.stroke();

                xAnterior = xActual;
                yAnterior = yActual;
            });

            // Evento de fin de dibujo
            canvas.addEventListener("mouseup", function() {
                dibujando = false;
            });

            // Evento de dejar el área del canvas
            canvas.addEventListener("mouseleave", function() {
                dibujando = false;
            });

            // Guardar la imagen con el dibujo
            function guardarImagen() {
                var imagenConDibujo = new Image();
                imagenConDibujo.src = canvas.toDataURL("image/png");
                document.body.appendChild(imagenConDibujo);
            }
        };
    </script>
@stop
