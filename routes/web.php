<?php

use App\Http\Controllers\IndexController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [IndexController::class, 'index']);
Route::post('/', [IndexController::class, 'index']);
Route::get('/dashboard', [IndexController::class, 'index_admin'])
    ->middleware(['auth'])->name('dashboard');
Route::get('/edit/{id}', [IndexController::class, 'edit'])
    ->middleware(['auth'])->name('edit');
Route::post('/update_weather', [IndexController::class, 'update_weather'])
    ->middleware(['auth']);


require __DIR__ . '/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
