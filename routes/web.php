<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Inventory_TransactionController;
use App\Http\Controllers\MaintenanceController;


Route::get('/', function(){
return redirect('/employees');

});

Route::get('/inventories', [InventoryController::class, 'index']);
Route::post('/inventories123', [InventoryController::class, 'store']);
Route::get('/inventories/{id}/edit', [InventoryController::class, 'edit']);
Route::put('/inventories/{id}', [InventoryController::class, 'update']);
Route::delete('/inventories/{id}', [InventoryController::class, 'destroy']);


Route::get('/suppliers', [SupplierController::class, 'index']);
Route::post('/suppliers123', [SupplierController::class, 'store']);
Route::get('/suppliers/{id}/edit', [SupplierController::class, 'edit']);
Route::put('/suppliers/{id}', [SupplierController::class, 'update']);
Route::delete('/suppliers/{id}', [SupplierController::class, 'destroy']);

Route::get('/employees', [EmployeeController::class, 'index']);
Route::post('/employees123', [EmployeeController::class, 'store']);
Route::get('/employees/{id}/edit', [EmployeeController::class, 'edit']);
Route::put('/employees/{id}', [EmployeeController::class, 'update']);
Route::delete('/employees/{id}', [EmployeeController::class, 'destroy']);

Route::get('/maintenances', [MaintenanceController::class, 'maintenanceindex']);
Route::post('/maintenances123', [MaintenanceController::class, 'maintenancestore']);
Route::get('/maintenances/{id}/maintenancesedit', [MaintenanceController::class, 'maintenanceedit']);
Route::put('/maintenances/{id}', [MaintenanceController::class, 'maintenanceupdate']);
Route::delete('/maintenances/{id}', [MaintenanceController::class, 'maintenancedestroy']);

Route::get('/transactions', [Inventory_TransactionController::class, 'transactionsindex']);
Route::post('/transactions123', [Inventory_TransactionController::class, 'transactionsstore']);
Route::get('/transactions/{id}/transactionsedit', [Inventory_TransactionController::class, 'transactionsedit']);
Route::put('/transactions/{id}', [Inventory_TransactionController::class, 'transactionsupdate']);
Route::delete('/transactions/{id}', [Inventory_TransactionController::class, 'transactionsdestroy']);
