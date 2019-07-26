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