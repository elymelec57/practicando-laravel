<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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

Route::get('/', HomeController::class)->name('home');
/*
Route::get('/curso',[CursoController::class, 'index'])->name('curso.index');

Route::get('/curso/create',[CursoController::class, 'create'])->name('curso.create');

Route::post('curso',[CursoController::class, 'store'])->name('curso.store');

Route::get('/curso/{id}',[CursoController::class, 'show'])->name('curso.show');

Route::get('/curso/{curso}/edit',[CursoController::class, 'edit'])->name('curso.edit');

Route::put('/curso/{curso}',[CursoController::class, 'update'])->name('curso.update');

Route::delete('curso/{curso}',[CursoController::class, 'destroy'])->name('curso.destroy');*/

Route::resource('curso',CursoController::class);   // una manera de crear las rutas mas optimizada

Route::view('contacto', 'contacto')->name('contacto'); // esta ruta es para ir a una vista que solo tiene contenido estatico