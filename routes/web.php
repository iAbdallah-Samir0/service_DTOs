<?php

use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\YouTubeController;
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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/index', function () {
//    return view('welcome');
    return response()->json(['massage' =>'get category']);
});

Route::resource('/',WelcomeController::class);

Route::resource('posts', PostController::class);

Route::get('/youtube-search', [YouTubeController::class, 'search'])->name('youtube.search');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.home');
Route::get('/portfolio-services', [PortfolioController::class, 'services'])->name('portfolio.services');
Route::get('/portfolio-resume', [PortfolioController::class, 'resume'])->name('portfolio.resume');
Route::get('/portfolio-portfolio', [PortfolioController::class, 'portfolio'])->name('portfolio.portfolio');
Route::get('/portfolio-contact', [PortfolioController::class, 'contact'])->name('portfolio.contact');



