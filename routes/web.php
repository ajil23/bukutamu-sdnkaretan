<?php

use App\Http\Controllers\BukutamuController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => [
    'auth:sanctum',
    'verified',
]], function(){
    // Route::get('admin_dashboard', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('bukutamu', [BukutamuController::class, 'index'])->name('bukutamu.view');
    Route::get('bukutamu/add', [BukutamuController::class, 'add'])->name('bukutamu.add');
    Route::get('bukutamu/export-excel', [BukutamuController::class, 'export_excel'])->name('bukutamu.export');
    Route::get('bukutamu/edit/{id}', [BukutamuController::class, 'edit'])->name('bukutamu.edit');
    Route::post('bukutamu/update/{id}', [BukutamuController::class, 'update'])->name('bukutamu.update');
    Route::get('bukutamu/delete/{id}', [BukutamuController::class, 'delete'])->name('bukutamu.delete');
});

Route::post('bukutamu/store', [BukutamuController::class, 'store'])->name('bukutamu.store');

