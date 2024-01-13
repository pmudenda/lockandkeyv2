<?php
use Modules\Store\Http\Controllers\StoresController;

// use Illuminate\Support\Facades\Route;
// use $MODULE_NAMESPACE$\Store\$CONTROLLER_NAMESPACE$\StoreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([], function () {
    Route::resource('store', StoresController::class)->names('store');
});
