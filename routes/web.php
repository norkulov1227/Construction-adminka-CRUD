<?php

use App\Http\Controllers\Admin\ConstructionController;
use App\Models\Construction;
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
    return view('welcome');
});

Route::get('/admin/index', [ConstructionController::class, 'index'])->name('admin.index');
Route::get('/admin/create', [ConstructionController::class, 'create'])->name('admin.create');
Route::post('/admin/store', [ConstructionController::class, 'store'])->name('admin.store');
Route::get('/admin/show/{id}', [ConstructionController::class, 'show'])->name('admin.show');
Route::get('/admin/edit/{id}', [ConstructionController::class, 'edit'])->name('admin.edit');
Route::put('admin/update/{id}', [ConstructionController::class, 'update'])->name('admin.update');
Route::delete('/admin/delete/{id}', [ConstructionController::class, 'destroy'])->name('admin.delete');
