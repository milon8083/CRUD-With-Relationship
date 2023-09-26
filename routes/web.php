<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DepartmentController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/create',[TeaController::class,'create'])->name('create');
Route::get('/read',[TeaController::class,'readView'])->name('read');
Route::get('/edit/{id}',[TeaController::class,'edit'])->name('edit');
Route::post('/update',[TeaController::class,'update'])->name('update');
Route::get('/delete/{id}',[TeaController::class,'delete'])->name('delete');

Route::resources(['departments' => DepartmentController::class]);
