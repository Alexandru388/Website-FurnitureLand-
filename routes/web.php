<?php
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return redirect('/catalog');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/catalog', [App\Http\Controllers\FurnitureController::class, 'index']) -> name('catalog');
Route::post('/catalog',[App\Http\Controllers\FurnitureController::class, 'store'] ) ;
Route::put('/catalog',[App\Http\Controllers\FurnitureController::class, 'save'] ) ;
Route::delete('/catalog',[App\Http\Controllers\FurnitureController::class, 'delete'] ) ;
Route::view('/dashboard', 'dashboard') -> middleware("auth") -> name("dashboard");
Route::view('/create', 'create') -> middleware("auth") -> name("create");
Route::get('/update',[App\Http\Controllers\FurnitureController::class, 'edit']) -> middleware("auth") -> name("update");
Route::post('/update', [App\Http\Controllers\FurnitureController::class, 'update'])-> middleware("auth") ;
Route::get('/delete', [App\Http\Controllers\FurnitureController::class, 'destroy']) -> middleware("auth");
//Route::get('/delete/{id}', [App\Http\Controllers\FurnitureController::class, 'destroyWC']) -> middleware("auth");
Route::post('/sort', [App\Http\Controllers\FurnitureController::class, 'sort']) -> middleware("auth");
Route::post('/sort2', [App\Http\Controllers\FurnitureController::class, 'sort2']) -> middleware("auth");
Route::view('/About', 'About') -> middleware("auth") -> name("About");
Route::get('/home', [App\Http\Controllers\FurnitureController::class, 'home']) -> middleware("auth");
Route::post('/cart', [App\Http\Controllers\FurnitureController::class, 'cart']) -> middleware("auth");
Route::get('/cart', [App\Http\Controllers\FurnitureController::class, 'showCart']) ;
Route::get('/abs', [App\Http\Controllers\FurnitureController::class, 'destroy1']) -> middleware("auth");
