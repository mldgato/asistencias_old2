<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\SupplierController;
use App\Http\Controllers\admin\MeasureController;
use App\Http\Controllers\admin\WarehouseController;
use App\Http\Controllers\admin\RackController;
use App\Http\Controllers\admin\ProducController;
use App\Http\Controllers\admin\BuyController;

Route::get('', [HomeController::class, 'index'])->name('admin.index');

Route::resource('suppliers', SupplierController::class)->names('admin.stocktaking.suppliers');
Route::resource('measures', MeasureController::class)->names('admin.stocktaking.measures');
Route::resource('warehouses', WarehouseController::class)->names('admin.stocktaking.warehouses');
Route::resource('racks', RackController::class)->names('admin.stocktaking.racks');
Route::resource('products', ProducController::class)->names('admin.stocktaking.products');


Route::get('buys/cart/{supplier}', [BuyController::class, 'cart'])->name('admin.stocktaking.buys.cart');
Route::get('buys/add_buy/{product}', [BuyController::class, 'add_buy'])->name('admin.stocktaking.buys.add_buy');
Route::patch('buys/update_quantity', [BuyController::class, 'update_quantity'])->name('admin.stocktaking.buys.update_quantity');
Route::patch('buys/update_cost', [BuyController::class, 'update_cost'])->name('admin.stocktaking.buys.update_cost');
Route::delete('buys/remove_from_cart', [BuyController::class, 'remove_from_cart'])->name('admin.stocktaking.buys.remove_from_cart');
Route::resource('buys', BuyController::class)->names('admin.stocktaking.buys'); 