<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('customers', 'CustomersCtrl@index');
Route::get('customers/inactive', 'CustomersCtrl@inactive');
Route::get('customers/{id}', 'CustomersCtrl@show');
Route::post('customers', 'CustomersCtrl@store');
Route::put('customers/{id}', 'CustomersCtrl@update');
Route::delete('customers/{id}', 'CustomersCtrl@delete');
Route::patch('customers/{id}', 'CustomersCtrl@restore');

Route::get('suppliers', 'SuppliersCtrl@index');
Route::get('suppliers/inactive', 'SuppliersCtrl@inactive');
Route::get('suppliers/{id}', 'SuppliersCtrl@show');
Route::post('suppliers', 'SuppliersCtrl@store');
Route::put('suppliers/{id}', 'SuppliersCtrl@update');
Route::delete('suppliers/{id}', 'SuppliersCtrl@delete');
Route::patch('suppliers/{id}', 'SuppliersCtrl@restore');