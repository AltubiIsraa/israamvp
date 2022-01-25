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
//activites
Route::get('/',App\Http\Controllers\WelcomeController::class);
Route::get('/dashboard/doccreate',[\App\Http\Controllers\DocController::class, 'create']);
Route::resource('/docs/store' , [\App\Http\Controllers\DocController::class,'index']);
//Route::get('/dashboard/store',[\App\Http\Controllers\SubjectsController::class,'index']);

Route::get('/dashboard/profile',App\Http\Controllers\ProfileController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
