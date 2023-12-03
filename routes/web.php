<?php

use App\Http\Controllers\Backend\ArticleController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Frontend\FrontendController;
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

Route::get('/', [FrontendController::class, 'home'])->name('home');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->group(function () {
        Route::get('/dashboard',function () {
            return view('dashboard');
        })->name('dashboard');
        Route::resource('articles', ArticleController::class)->names('article');
        Route::resource('pages', PageController::class)->names('page');
        Route::resource('sliders', SliderController::class)->names('slider');
        Route::resource('galleries', GalleryController::class)->names('gallery');
        Route::resource('services', ServiceController::class)->names('services');
        Route::resource('categories', CategoryController::class)->names('category');
        Route::resource('about', AboutController::class)->names('about');
        Route::resource('contacts', ContactController::class)->names('contact');
    });
