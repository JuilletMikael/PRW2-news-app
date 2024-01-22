<?php

use App\Http\Controllers\AuctionController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;

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

Route::resource('articles', ArticleController::class);
Route::resource('articles.comments', CommentController::class)->only(['store']);
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('articles.auctions', AuctionController::class)->only(['create', 'store']);
