<?php

use App\Http\Controllers\LoginController;
use App\Livewire\Admin\CategoryController;
use App\Livewire\Admin\CommentController;
use App\Livewire\Admin\ProductController;
use App\Livewire\LoginController as LivewireLoginController;
use App\Models\User;
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

Route::get('/', function () {
    return view('landing_page');
});

Route::get('/tes', function(){
    return public_path();
});
Route::get('/login', LivewireLoginController::class)->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::middleware('auth')->group(function(){
    Route::get('/category', CategoryController::class);
    Route::get('/product', ProductController::class);
    Route::get('/comment', CommentController::class);
});
