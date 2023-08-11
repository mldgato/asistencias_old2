<div>
    <div class="card mb-3">
        <div class="card-header">
            <h2><i class="fas fa-id-card"></i> Información del asegurado</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-9">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                        </div>
                        <input wire:model="search" id="searcher" type="text" class="form-control"
                            placeholder="Escriba para buscar" autofocus="autofocus" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <div class="form-group">
                        <label>Póliza:</label>
                        <p class="form-control">{{ $policy }}</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="form-group">
                        <label>Nombres:</label>
                        <p class="form-control">{{ $insuredFirstName }}</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="form-group">
                        <label>Apellidos:</label>
                        <p class="form-control">{{ $insuredLastName }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <div class="form-group">
                        <label>Vehículo:</label>
                        <p class="form-control">{{ $vehicleBrand }}</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="form-group">
                        <label>Línea:</label>
                        <p class="form-control">{{ $vehicleLine }}</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="form-group">
                        <label>Tipo:</label>
                        <p class="form-control">{{ $vehicleType }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <div class="form-group">
                        <label>Año:</label>
                        <p class="form-control">{{ $vehicleYear }}</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="form-group">
                        <label>Color:</label>
                        <p class="form-control">{{ $vehicleColor }}</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="form-group">
                        <label>Placa:</label>
                        <p class="form-control">{{ $vehiclePlate }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    @if ($readyToLoad)
                        <a href="{{ route('admin.services.newService', $search) }}" class="btn btn-primary"><i class="fas fa-hand-holding-medical"></i> Generar servicio</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
