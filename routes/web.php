<?php

use App\Http\Controllers\PortfolioController;
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

Route::get('/', [PortfolioController::class, 'index'])->name('portfolio');
Route::post('/', [PortfolioController::class, 'contactStore'])->name('portfolio.contact');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/blog/{post}', [PortfolioController::class, 'blog'])->name('portfolio.blog.show');
