<?php

use App\Http\Controllers\ActivitiesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
Route::get('/dashboard/sub',[\App\Http\Controllers\SubController::class,'index']);
Route::get('/books/add' , [\App\Http\Controllers\SubController::class,'create']);
Route::post('/books/store' , [\App\Http\Controllers\SubController::class,'store']);



Route::get('/dashboard/subject',[\App\Http\Controllers\SubjectsController::class,'index']);

Route::get('/dashboard/profile',App\Http\Controllers\ProfileController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
