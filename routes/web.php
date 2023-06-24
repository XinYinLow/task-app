<?php

use App\Http\Controllers\TaskController;
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

Route::get('/', [TaskController::class,'index'])->name('task.index');

Route::get('/tasks/create', [TaskController::class,'create'])->name('task.create');

Route::get('/tasks/{id}', [TaskController::class,'show'])->name('task.show');

Route::post('/', [TaskController::class,'store'])->name('task.store');

Route::get('/tasks/{id}/edit', [TaskController::class,'edit'])->name('task.edit');

Route::put('/tasks/{id}/update', [TaskController::class,'update'])->name('task.update');

Route::delete('/tasks/{id}', [TaskController::class,'delete'])->name('task.delete');