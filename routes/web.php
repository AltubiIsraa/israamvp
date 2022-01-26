<?php

use App\Http\Controllers\ActivitiesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\DocController;
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
Route::get('/',App\Http\Controllers\WelcomeController::class);

//DocController

Route::get('/dashboard/doccreate',[\App\Http\Controllers\DocController::class, 'create']);
Route::post('/dashboard/store',[\App\Http\Controllers\DocController::class, 'store']);
Route::get('/dashboard/index' , [\App\Http\Controllers\DocController::class,'index'])->name('Doc.index');
Route::get('/doc/show/{id}' , [\App\Http\Controllers\DocController::class,'show'])->name('Doc.show');
Route::get('/doc/delete/{id}', [\App\Http\Controllers\DocController::class,'delete'])->name('Doc.delete');
Route::post('/doc/destroy/{id}', [\App\Http\Controllers\DocController::class,'destroy'])->name('Doc.destroy');
Route::get('/doc/edit/{id}', [\App\Http\Controllers\DocController::class,'edit'])->name('Doc.edit');
Route::post('/doc/update/{id}', [\App\Http\Controllers\DocController::class,'update'])->name('Doc.update');

Route::get('/dashboard/profile',App\Http\Controllers\ProfileController::class)->name('profile');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
