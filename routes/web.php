<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [
    BlogController::class, 'index'
]);

Route::post('validate-exits', [
    BlogController::class, 'store'
])->name('validate.exists');

Route::view('/generate-slug', 'livewire.welcome');

Route::get('/post', [PostController::class, 'index']);
