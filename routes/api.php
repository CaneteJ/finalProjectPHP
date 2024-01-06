<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('students', [StudentController::class, 'index']);
Route::get('/students/all', [StudentController::class, 'index'])->name('students.index');
Route::get('/student/{id}', [StudentController::class, 'show'])->name('students.show');
Route::get('/student/add', [StudentController::class, 'create'])->name('students.create');
Route::post('/student/add', [StudentController::class, 'store'])->name('students.store');
Route::get('/student/update/{id}', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/student/update/{id}', [StudentController::class, 'update'])->name('students.update');
Route::delete('/student/delete/{id}', [StudentController::class, 'destroy'])->name('students.destroy');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});