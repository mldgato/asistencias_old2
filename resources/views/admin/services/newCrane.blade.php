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
            <h2><i class="fas fa-clipboard-list"></i> Motor</h2>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <tr>
                    <td></td>
                    <td>Si</td>
                    <td>No</td>
                </tr>
                <tr>
                    <td>Motor</td>
                    <td><input type="radio" name="Motor" id=""></td>
                    <td><input type="radio" name="Motor" id=""></td>
                </tr>
                <tr>
                    <td>Ventiladores</td>
                    <td><input type="radio" name="Ventiladores" id=""></td>
                    <td><input type="radio" name="Ventiladores" id=""></td>
                </tr>
                <tr>
                    <td>Depósito del agua</td>
                    <td><input type="radio" name="DepositoAgua" id=""></td>
                    <td><input type="radio" name="DepositoAgua" id=""></td>
                </tr>
                <tr>
                    <td>Batería</td>
                    <td><input type="radio" name="Batería" id=""></td>
                    <td><input type="radio" name="Batería" id=""></td>
                </tr>
                <tr>
                    <td>Bocina</td>
                    <td><input type="radio" name="Bocina" id=""></td>
                    <td><input type="radio" name="Bocina" id=""></td>
                </tr>
                <tr>
                    <td>Tapón de motor</td>
                    <td><input type="radio" name="Tapón de motor" id=""></td>
                    <td><input type="radio" name="Tapón de motor" id=""></td>
                </tr>
                <tr>
                    <td>Medidor de aceite</td>
                    <td><input type="radio" name="Medidordeaceite" id=""></td>
                    <td><input type="radio" name="Medidordeaceite" id=""></td>
                </tr>
                <tr>
                    <td>Tapón líquido de frenos</td>
                    <td><input type="radio" name="Taponliquidodefrenos" id=""></td>
                    <td><input type="radio" name="Taponliquidodefrenos" id=""></td>
                </tr>
                <tr>
                    <td>Tapón dep. agua</td>
                    <td><input type="radio" name="Taponagua" id=""></td>
                    <td><input type="radio" name="Taponagua" id=""></td>
                </tr>
                <tr>
                    <td>Distribuidor</td>
                    <td><input type="radio" name="Distribuidor" id=""></td>
                    <td><input type="radio" name="Distribuidor" id=""></td>
                </tr>
                <tr>
                    <td>Caja de filtro de aceite</td>
                    <td><input type="radio" name="Cajadefiltrodeaceite" id=""></td>
                    <td><input type="radio" name="Cajadefiltrodeaceite" id=""></td>
                </tr>
                <tr>
                    <td>Alarma</td>
                    <td><input type="radio" name="Alarma" id=""></td>
                    <td><input type="radio" name="Alarma" id=""></td>
                </tr>
                <tr>
                    <td>Carburador</td>
                    <td><input type="radio" name="Carburador" id=""></td>
                    <td><input type="radio" name="Carburador" id=""></td>
                </tr>
                <tr>
                    <td>Alternador</td>
                    <td><input type="radio" name="Alternador" id=""></td>
                    <td><input type="radio" name="Alternador" id=""></td>
                </tr>
                <tr>
                    <td>Starter</td>
                    <td><input type="radio" name="Starter" id=""></td>
                    <td><input type="radio" name="Starter" id=""></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <h2><i class="fas fa-clipboard-list"></i> Parte posterior</h2>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <tr>
                    <td></td>
                    <td>Si</td>
                    <td>No</td>
                </tr>
                <tr>
                    <td>Bumper</td>
                    <td><input type="radio" name="Bumper" id="bumper_si"></td>
                    <td><input type="radio" name="Bumper" id="bumper_no"></td>
                </tr>
                <tr>
                    <td>Stop Izquierdo</td>
                    <td><input type="radio" name="Stop_Izquierdo" id="stop_izquierdo_si"></td>
                    <td><input type="radio" name="Stop_Izquierdo" id="stop_izquierdo_no"></td>
                </tr>
                <tr>
                    <td>Stop Derecho</td>
                    <td><input type="radio" name="Stop_Derecho" id="stop_derecho_si"></td>
                    <td><input type="radio" name="Stop_Derecho" id="stop_derecho_no"></td>
                </tr>
                <tr>
                    <td>Luz de retroceso Izquierda</td>
                    <td><input type="radio" name="Luz_retroceso_Izq" id="luz_retroceso_izq_si"></td>
                    <td><input type="radio" name="Luz_retroceso_Izq" id="luz_retroceso_izq_no"></td>
                </tr>
                <tr>
                    <td>Luz de retroceso Derecha</td>
                    <td><input type="radio" name="Luz_retroceso_Der" id="luz_retroceso_der_si"></td>
                    <td><input type="radio" name="Luz_retroceso_Der" id="luz_retroceso_der_no"></td>
                </tr>
                <tr>
                    <td>Puerta trasera</td>
                    <td><input type="radio" name="Puerta_trasera" id="puerta_trasera_si"></td>
                    <td><input type="radio" name="Puerta_trasera" id="puerta_trasera_no"></td>
                </tr>
                <tr>
                    <td>Baúl</td>
                    <td><input type="radio" name="Baul" id="baul_si"></td>
                    <td><input type="radio" name="Baul" id="baul_no"></td>
                </tr>
                <tr>
                    <td>Chapa de baúl</td>
                    <td><input type="radio" name="Chapa_baul" id="chapa_baul_si"></td>
                    <td><input type="radio" name="Chapa_baul" id="chapa_baul_no"></td>
                </tr>
                <tr>
                    <td>Pidevías derecho</td>
                    <td><input type="radio" name="Pidevias_der" id="pidevias_der_si"></td>
                    <td><input type="radio" name="Pidevias_der" id="pidevias_der_no"></td>
                </tr>
                <tr>
                    <td>Pidevías izquierdo</td>
                    <td><input type="radio" name="Pidevias_izq" id="pidevias_izq_si"></td>
                    <td><input type="radio" name="Pidevias_izq" id="pidevias_izq_no"></td>
                </tr>
                <tr>
                    <td>Spoiler</td>
                    <td><input type="radio" name="Spoiler" id="spoiler_si"></td>
                    <td><input type="radio" name="Spoiler" id="spoiler_no"></td>
                </tr>
                <tr>
                    <td>Parabrisas</td>
                    <td><input type="radio" name="Parabrisas" id="parabrisas_si"></td>
                    <td><input type="radio" name="Parabrisas" id="parabrisas_no"></td>
                </tr>
                <tr>
                    <td>Limpia brisas</td>
                    <td><input type="radio" name="Limpia_brisas" id="limpia_brisas_si"></td>
                    <td><input type="radio" name="Limpia_brisas" id="limpia_brisas_no"></td>
                </tr>
                <tr>
                    <td>Cola de pato</td>
                    <td><input type="radio" name="Cola_pato" id="cola_pato_si"></td>
                    <td><input type="radio" name="Cola_pato" id="cola_pato_no"></td>
                </tr>
                <tr>
                    <td>Emblemas</td>
                    <td><input type="radio" name="Emblemas" id="emblemas_si"></td>
                    <td><input type="radio" name="Emblemas" id="emblemas_no"></td>
                </tr>
                <tr>
                    <td>Plumillas</td>
                    <td><input type="radio" name="Plumillas" id="plumillas_si"></td>
                    <td><input type="radio" name="Plumillas" id="plumillas_no"></td>
                </tr>
                <tr>
                    <td>Placa posterior</td>
                    <td><input type="radio" name="Placa_posterior" id="placa_posterior_si"></td>
                    <td><input type="radio" name="Placa_posterior" id="placa_posterior_no"></td>
                </tr>
            </table>

        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <h2><i class="fas fa-clipboard-list"></i> Parte frontal</h2>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <tr>
                    <td></td>
                    <td>Si</td>
                    <td>No</td>
                </tr>
                <tr>
                    <td>Bumper</td>
                    <td><input type="radio" name="Bumper" id="bumper_si"></td>
                    <td><input type="radio" name="Bumper" id="bumper_no"></td>
                </tr>
                <tr>
                    <td>Silbin Izquierdo</td>
                    <td><input type="radio" name="Silbin_Izquierdo" id="silbin_izq_si"></td>
                    <td><input type="radio" name="Silbin_Izquierdo" id="silbin_izq_no"></td>
                </tr>
                <tr>
                    <td>Silbin Derecho</td>
                    <td><input type="radio" name="Silbin_Derecho" id="silbin_der_si"></td>
                    <td><input type="radio" name="Silbin_Derecho" id="silbin_der_no"></td>
                </tr>
                <tr>
                    <td>Luz media Izquierda</td>
                    <td><input type="radio" name="Luz_media_Izq" id="luz_media_izq_si"></td>
                    <td><input type="radio" name="Luz_media_Izq" id="luz_media_izq_no"></td>
                </tr>
                <tr>
                    <td>Luz media Derecha</td>
                    <td><input type="radio" name="Luz_media_Der" id="luz_media_der_si"></td>
                    <td><input type="radio" name="Luz_media_Der" id="luz_media_der_no"></td>
                </tr>
                <tr>
                    <td>Persiana</td>
                    <td><input type="radio" name="Persiana" id="persiana_si"></td>
                    <td><input type="radio" name="Persiana" id="persiana_no"></td>
                </tr>
                <tr>
                    <td>Pidevías Izquierdo</td>
                    <td><input type="radio" name="Pidevias_Izquierdo" id="pidevias_izq_si"></td>
                    <td><input type="radio" name="Pidevias_Izquierdo" id="pidevias_izq_no"></td>
                </tr>
                <tr>
                    <td>Pidevías Derecho</td>
                    <td><input type="radio" name="Pidevias_Derecho" id="pidevias_der_si"></td>
                    <td><input type="radio" name="Pidevias_Derecho" id="pidevias_der_no"></td>
                </tr>
                <tr>
                    <td>Spoiler</td>
                    <td><input type="radio" name="Spoiler" id="spoiler_si"></td>
                    <td><input type="radio" name="Spoiler" id="spoiler_no"></td>
                </tr>
                <tr>
                    <td>Parabrisas</td>
                    <td><input type="radio" name="Parabrisas" id="parabrisas_si"></td>
                    <td><input type="radio" name="Parabrisas" id="parabrisas_no"></td>
                </tr>
                <tr>
                    <td>Limpiabrisas</td>
                    <td><input type="radio" name="Limpiabrisas" id="limpiabrisas_si"></td>
                    <td><input type="radio" name="Limpiabrisas" id="limpiabrisas_no"></td>
                </tr>
                <tr>
                    <td>Capó</td>
                    <td><input type="radio" name="Capo" id="capo_si"></td>
                    <td><input type="radio" name="Capo" id="capo_no"></td>
                </tr>
                <tr>
                    <td>Emblemas</td>
                    <td><input type="radio" name="Emblemas" id="emblemas_si"></td>
                    <td><input type="radio" name="Emblemas" id="emblemas_no"></td>
                </tr>
                <tr>
                    <td>Plumillas</td>
                    <td><input type="radio" name="Plumillas" id="plumillas_si"></td>
                    <td><input type="radio" name="Plumillas" id="plumillas_no"></td>
                </tr>
                <tr>
                    <td>Neblineras</td>
                    <td><input type="radio" name="Neblineras" id="neblineras_si"></td>
                    <td><input type="radio" name="Neblineras" id="neblineras_no"></td>
                </tr>
                <tr>
                    <td>Placa frontal</td>
                    <td><input type="radio" name="Placa_frontal" id="placa_frontal_si"></td>
                    <td><input type="radio" name="Placa_frontal" id="placa_frontal_no"></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <h2><i class="fas fa-clipboard-list"></i> Interior</h2>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <tr>
                    <td></td>
                    <td>Si</td>
                    <td>No</td>
                </tr>
                <tr>
                    <td>Motor</td>
                    <td><input type="radio" name="Motor" id="motor_si"></td>
                    <td><input type="radio" name="Motor" id="motor_no"></td>
                </tr>
                <tr>
                    <td>Luz interior</td>
                    <td><input type="radio" name="Luz_interior" id="luz_interior_si"></td>
                    <td><input type="radio" name="Luz_interior" id="luz_interior_no"></td>
                </tr>
                <tr>
                    <td>Cinturones de seguridad</td>
                    <td><input type="radio" name="Cinturones_seguridad" id="cinturones_si"></td>
                    <td><input type="radio" name="Cinturones_seguridad" id="cinturones_no"></td>
                </tr>
                <tr>
                    <td>Extintor</td>
                    <td><input type="radio" name="Extintor" id="extintor_si"></td>
                    <td><input type="radio" name="Extintor" id="extintor_no"></td>
                </tr>
                <tr>
                    <td>Botiquín</td>
                    <td><input type="radio" name="Botiquin" id="botiquin_si"></td>
                    <td><input type="radio" name="Botiquin" id="botiquin_no"></td>
                </tr>
                <tr>
                    <td>Espejo retrovisor</td>
                    <td><input type="radio" name="Espejo_retrovisor" id="espejo_si"></td>
                    <td><input type="radio" name="Espejo_retrovisor" id="espejo_no"></td>
                </tr>
                <tr>
                    <td>Alfombras</td>
                    <td><input type="radio" name="Alfombras" id="alfombras_si"></td>
                    <td><input type="radio" name="Alfombras" id="alfombras_no"></td>
                </tr>
                <tr>
                    <td>Bocinas</td>
                    <td><input type="radio" name="Bocinas" id="bocinas_si"></td>
                    <td><input type="radio" name="Bocinas" id="bocinas_no"></td>
                </tr>
                <tr>
                    <td>Llavero</td>
                    <td><input type="radio" name="Llavero" id="llavero_si"></td>
                    <td><input type="radio" name="Llavero" id="llavero_no"></td>
                </tr>
                <tr>
                    <td>Control A/C</td>
                    <td><input type="radio" name="Control_AC" id="control_ac_si"></td>
                    <td><input type="radio" name="Control_AC" id="control_ac_no"></td>
                </tr>
                <tr>
                    <td>Palanca de cambios</td>
                    <td><input type="radio" name="Palanca_cambios" id="palanca_si"></td>
                    <td><input type="radio" name="Palanca_cambios" id="palanca_no"></td>
                </tr>
                <tr>
                    <td>Radio completo</td>
                    <td><input type="radio" name="Radio_completo" id="radio_completo_si"></td>
                    <td><input type="radio" name="Radio_completo" id="radio_completo_no"></td>
                </tr>
                <tr>
                    <td>Radio/carátula</td>
                    <td><input type="radio" name="Radio_caratula" id="radio_caratula_si"></td>
                    <td><input type="radio" name="Radio_caratula" id="radio_caratula_no"></td>
                </tr>
                <tr>
                    <td>Bolsas de aire</td>
                    <td><input type="radio" name="Bolsas_aire" id="bolsas_si"></td>
                    <td><input type="radio" name="Bolsas_aire" id="bolsas_no"></td>
                </tr>
                <tr>
                    <td>Herramientas</td>
                    <td><input type="radio" name="Herramientas" id="herramientas_si"></td>
                    <td><input type="radio" name="Herramientas" id="herramientas_no"></td>
                </tr>
                <tr>
                    <td>Encendedor</td>
                    <td><input type="radio" name="Encendedor" id="encendedor_si"></td>
                    <td><input type="radio" name="Encendedor" id="encendedor_no"></td>
                </tr>
                <tr>
                    <td>Cenicero</td>
                    <td><input type="radio" name="Cenicero" id="cenicero_si"></td>
                    <td><input type="radio" name="Cenicero" id="cenicero_no"></td>
                </tr>
                <tr>
                    <td>Llanta de repuesto</td>
                    <td><input type="radio" name="Llanta_repuesto" id="llanta_repuesto_si"></td>
                    <td><input type="radio" name="Llanta_repuesto" id="llanta_repuesto_no"></td>
                </tr>
                <tr>
                    <td>Llave de chuchos</td>
                    <td><input type="radio" name="Llave_chuchos" id="llave_chuchos_si"></td>
                    <td><input type="radio" name="Llave_chuchos" id="llave_chuchos_no"></td>
                </tr>
                <tr>
                    <td>Triquet</td>
                    <td><input type="radio" name="Triquet" id="triquet_si"></td>
                    <td><input type="radio" name="Triquet" id="triquet_no"></td>
                </tr>
                <tr>
                    <td>Tarjeta de circulación original</td>
                    <td><input type="radio" name="Tarjeta_circulacion_original" id="tarjeta_circulacion_original_si">
                    </td>
                    <td><input type="radio" name="Tarjeta_circulacion_original" id="tarjeta_circulacion_original_no">
                    </td>
                </tr>
                <tr>
                    <td>Copia de tarjeta de circulación</td>
                    <td><input type="radio" name="Copia_tarjeta_circulacion" id="copia_tarjeta_circulacion_si"></td>
                    <td><input type="radio" name="Copia_tarjeta_circulacion" id="copia_tarjeta_circulacion_no"></td>
                </tr>
                <tr>
                    <td>Llaves</td>
                    <td><input type="radio" name="Llaves" id="llaves_si"></td>
                    <td><input type="radio" name="Llaves" id="llaves_no"></td>
                </tr>
                <tr>
                    <td>Timón</td>
                    <td><input type="radio" name="Timon" id="timon_si"></td>
                    <td><input type="radio" name="Timon" id="timon_no"></td>
                </tr>
                <tr>
                    <td>Señales</td>
                    <td><input type="radio" name="Senales" id="senales_si"></td>
                    <td><input type="radio" name="Senales" id="senales_no"></td>
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
