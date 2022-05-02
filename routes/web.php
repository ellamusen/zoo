<?php

use \Illuminate\Http\Request;
use App\Http\Controllers\AnimalController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/animals', function () {
    return view('animals');
})->middleware(['auth'])->name('animals');

Route::resource('/animals', AnimalController::class)->middleware(['auth']);

Route::post('/upload', function(Request $request) {
    $request->image->store('images');
    return 'uploaded';
});



require __DIR__.'/auth.php';
