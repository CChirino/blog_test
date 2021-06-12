<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryHomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/',  function () {
    return redirect('home');
});
Route::resource('home', HomeController::class);
Route::resource('category', CategoryHomeController::class);
Route::resource('posts', PostController::class)
    ->middleware(['auth:sanctum', 'verified']);

Route::resource('categories', CategoryController::class)
    ->middleware(['auth:sanctum', 'verified']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

require __DIR__.'/auth.php';
