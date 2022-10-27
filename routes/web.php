<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});



/*
|------------------------------------------------
| API Routes
|------------------------------------------------
*/


Route::get('/my-form', [ProductController::class, 'ipv6form']) ;
Route::post('/submit-form', [ProductController::class, 'validateForm'])->name('validate.ip');
