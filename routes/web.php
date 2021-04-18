<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\StudentController;

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

Route::resource('student', StudentController::class);
Route::get('value/{student}', [StudentController::class, 'value'])->name('student.value');
Route::get('value/{student}/print_pdf', [StudentController::class,'print_pdf'])->name('print_pdf');
