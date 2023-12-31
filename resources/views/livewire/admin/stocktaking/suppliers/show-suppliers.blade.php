<div wire:init="loadSuppliers">
    @include('livewire.admin.stocktaking.suppliers.update-supplier')
    <div class="card mb-3">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-end">
                        @livewire('admin.stocktaking.suppliers.create-supplier')
                    </div>
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
        @if (count($suppliers))
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th style="cursor: pointer" wire:click="order('company')">
                                    Compañía
                                    @if ($sort == 'company')
                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-up ml-4"></i>
                                        @else
                                            <i class="fas fa-sort-down ml-4"></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort ml-4"></i>
                                    @endif
                                </th>
                                <th style="cursor: pointer" wire:click="order('taxnumber')">
                                    NIT
                                    @if ($sort == 'taxnumber')
                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-up ml-4"></i>
                                        @else
                                            <i class="fas fa-sort-down ml-4"></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort ml-4"></i>
                                    @endif
                                </th>
                                <th style="cursor: pointer" class="d-none d-sm-table-cell"
                                    wire:click="order('address')">
                                    Dirección
                                    @if ($sort == 'address')
                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-up ml-4"></i>
                                        @else
                                            <i class="fas fa-sort-down ml-4"></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort ml-4"></i>
                                    @endif
                                </th>
                                <th style="cursor: pointer" wire:click="order('phone')">
                                    Teléfono.
                                    @if ($sort == 'phone')
                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-up ml-4"></i>
                                        @else
                                            <i class="fas fa-sort-down ml-4"></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort ml-4"></i>
                                    @endif
                                </th>
                                <th style="cursor: pointer" wire:click="order('contact')">
                                    Vendedor
                                    @if ($sort == 'contact')
                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-up ml-4"></i>
                                        @else
                                            <i class="fas fa-sort-down ml-4"></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort ml-4"></i>
                                    @endif
                                </th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($suppliers as $supplier)
                                <tr>
                                    <td>{{ $supplier->company }}</td>
                                    <td>{{ $supplier->taxnumber }}</td>
                                    <td class="d-none d-sm-table-cell">{{ $supplier->address }}</td>
                                    <td><a href="tel:{{ $supplier->phone }}">{{ $supplier->phone }}</a></td>
                                    <td>{{ $supplier->contact }}</td>
                                    <td class="text-right">

                                        <a href="{{ route('admin.stocktaking.suppliers.show', $supplier->id) }}" class="btn btn-success btn-sm mr-2" title="Productos"><i class="fas fa-boxes"></i></a>

                                        {{-- <button wire:click="edit({{ $supplier->id }})" data-toggle="modal"
                                            data-target="#UpdateNewSupplier" class="btn btn-primary btn-sm mr-2"
                                            title="Editar"><i class="fas fa-edit fa-fw"></i></button> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Compañía</th>
                                <th>NIT</th>
                                <th class="d-none d-sm-table-cell">Dirección</th>
                                <th>Teléfono</th>
                                <th>Vendedor</th>
                                <th>&nbsp;</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            @if ($suppliers->hasPages())
                <div class="card-footer">
                    <div class="d-flex justify-content-end">{{ $suppliers->links() }}</div>
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