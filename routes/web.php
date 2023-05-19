<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PanganController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'dashboard']);


  Route::get('/Login', function () {
    return "Page login";
  });

Route::get('/', [App\Http\Controllers\DashboardController::class, 'landing'])->name('landing');
Route::get('create', [App\Http\Controllers\PanganController::class, 'test'])->name('create');
Route::post('tambah', [PanganController::class, 'tambah'])->name('tambah');

Route::get('tampildata', [PanganController::class, 'basictable'])->name('tampildata');
Route::get('basictable', [PanganController::class, 'basictable'])->name('basictable');
// Route::get('/basictable/{id}', [PanganController::class, 'basictable'])->name('basictable');
Route::get('delete/{id}', [PanganController::class, 'delete'])->name('delete');

Route::get('/tampilupdate/{id}', [PanganController::class, 'tampilupdate'])->name('tampilupdate');

Route::post('/update/{id}', [PanganController::class, 'update'])->name('update');

