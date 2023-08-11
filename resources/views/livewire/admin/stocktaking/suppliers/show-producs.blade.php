<div wire:init="loadProducts" wire:on="productAdded">

    <div class="card mb-3">
        <div class="card-header">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <span class="text-primary"><i class="fas fa-toolbox"></i> Servicios</span>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12 col-md-3 mb-2">
                    <div class="d-flex align-items-center">
                        <span><strong>Mostrar</strong></span>
                        <span class="ml-2">
                            <select wire:model="cant" class="form-control">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </span>
                        <span class="ml-2"><strong>registros</strong></span>
                    </div>
                </div>
                <div class="col-12 col-md-9">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                        </div>
                        <input wire:model="search" id="searcher" type="text" class="form-control"
                            placeholder="Escriba para buscar" autofocus="autofocus" />
                    </div>
                </div>
            </div>
        </div>
        @if (count($products))
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Boleta</th>
                                <th>Póliza</th>
                                <th>Fecha</th>
                                <th>Servicio</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td class="align-middle">{{ $product->id }}</td>
                                    <td class="align-middle">{{ $product->insurance->policy }}</td>
                                    <td class="align-middle">{{ $product->assignmentDate }}</td>
                                    <td class="align-middle">{{ $product->serviceWork }}</td>
                                    <td class="align-middle text-right">
                                        <a href="{{ route('admin.stocktaking.buys.add_buy', $product->id) }}"
                                            class="btn btn-primary btn-sm mr-2" title="Agregar a la compra"><i
                                                class="fas fa-cart-plus"></i></a> 
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Boleta</th>
                                <th>Póliza</th>
                                <th>Fecha</th>
                                <th>Servicio</th>
                                <th>&nbsp;</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            @if ($products->hasPages())
                <div class="card-footer">
                    <div class="d-flex justify-content-end">{{ $products->links() }}</div>
                </div>
            @endif
        @else
            <div class="card-body">
                <strong class="text-danger">No se han encontrado registros...</strong>
            </div>
        @endif
    </div>
    @section('js')
        <script type="text/javascript">
            Livewire.on('closeModalMessaje', (title, message, type, mymodal) => {
                if (mymodal != 'null') {
                    $('#' + mymodal).modal('hide');
                }
                Swal.fire({
                    position: 'top-end',
                    icon: type,
                    title: title,
                    text: message,
                    showConfirmButton: false,
                    timer: 3000
                });
            });
        </script>
    @stop
</div>
