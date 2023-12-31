<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\InsuranceController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\admin\SupplierController;


Route::get('', [HomeController::class, 'index'])->name('admin.index');

Route::resource('insurances', InsuranceController::class)->names('admin.insurances');

Route::get('services/newService/{data}', [ServiceController::class, 'newService'])->name('admin.services.newService');
Route::get('services/newCrane', [ServiceController::class, 'newCrane'])->name('admin.services.newCrane');
Route::resource('services', ServiceController::class)->names('admin.services');


Route::resource('suppliers', SupplierController::class)->names('admin.stocktaking.suppliers');
Route::resource('measures', MeasureController::class)->names('admin.stocktaking.measures');
Route::resource('warehouses', WarehouseController::class)->names('admin.stocktaking.warehouses');
Route::resource('racks', RackController::class)->names('admin.stocktaking.racks');
Route::resource('products', ProducController::class)->names('admin.stocktaking.products');


/* Route::get('buys/cart/{supplier}', [BuyController::class, 'cart'])->name('admin.stocktaking.buys.cart');
Route::get('buys/add_buy/{product}', [BuyController::class, 'add_buy'])->name('admin.stocktaking.buys.add_buy');
Route::patch('buys/update_quantity', [BuyController::class, 'update_quantity'])->name('admin.stocktaking.buys.update_quantity');
Route::patch('buys/update_cost', [BuyController::class, 'update_cost'])->name('admin.stocktaking.buys.update_cost');
Route::delete('buys/remove_from_cart', [BuyController::class, 'remove_from_cart'])->name('admin.stocktaking.buys.remove_from_cart');
Route::delete('buys/cancel_buy', [BuyController::class, 'cancel_buy'])->name('admin.stocktaking.buys.cancel_buy');
Route::get('buys/{buy}/pdf', [BuyController::class, 'pdf'])->name('admin.stocktaking.buys.pdf');
Route::resource('buys', BuyController::class)->names('admin.stocktaking.buys'); 

Route::resource('customers', CustomerController::class)->names('admin.shop.customers');

Route::get('sales/products', [SalesController::class, 'products'])->name('admin.shop.sales.products');
Route::get('sales/add_sale/{product}', [SalesController::class, 'add_sale'])->name('admin.shop.sales.add_sale');
Route::get('sales/pdf/{id}', [SalesController::class, 'pdf'])->name('admin.shop.sales.pdf');
Route::patch('sales/update_quantity', [SalesController::class, 'update_quantity'])->name('admin.shop.sales.update_quantity');
Route::delete('sales/remove_from_cart', [SalesController::class, 'remove_from_cart'])->name('admin.shop.sales.remove_from_cart');
Route::delete('sales/cancel_sale', [SalesController::class, 'cancel_sale'])->name('admin.shop.sales.cancel_sale');
Route::resource('sales', SalesController::class)->names('admin.shop.sales');

 */