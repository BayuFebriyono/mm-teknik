<?php

use App\Http\Controllers\LoginController;
use App\Livewire\Admin\ArticleAdd;
use App\Livewire\Admin\ArticleController;
use App\Livewire\Admin\ArticleEdit;
use App\Livewire\Admin\CategoryController;
use App\Livewire\Admin\CommentController;
use App\Livewire\Admin\ProductController;
use App\Livewire\Home\HomeComponent;
use App\Livewire\Home\ShowArticle;
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

Route::get('/', HomeComponent::class);

Route::get('/tes', function(){
    return public_path();
});
Route::get('/login', LivewireLoginController::class)->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/show-article/{id}',ShowArticle::class);

Route::middleware('auth')->group(function(){
    Route::get('/category', CategoryController::class);
    Route::get('/product', ProductController::class);
    Route::get('/comment', CommentController::class);
    Route::get('/article', ArticleController::class);
    Route::get('/article-add', ArticleAdd::class);
    Route::get('/article-edit/{id}', ArticleEdit::class);
});
