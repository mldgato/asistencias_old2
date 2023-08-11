<?php

namespace App\Http\Livewire\Admin\Stocktaking\Suppliers;

use Livewire\Component;
use App\Models\Service;
use Livewire\WithPagination;

class ShowProducs extends Component
{
    use WithPagination;
    public $supplier;
    public $sort = 'id';
    public $direction = 'asc';
    public $cant = '10';
    public $readyToLoad = true;

    protected $paginationTheme = "bootstrap";

    public function render()
    {
        $products = Service::orderBy($this->sort, $this->direction)
            ->paginate($this->cant);
        return view('livewire.admin.stocktaking.suppliers.show-producs', compact('products'));
    }

    public function loadProducts()
    {
        $this->readyToLoad = true;
    }
}
