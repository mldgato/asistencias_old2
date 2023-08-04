<div wire:init="loadInsurance">
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
                <div class="col">
                    {{ $insuredLastName }}
                </div>
            </div>
        </div>
    </div>
</div>
