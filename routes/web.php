<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactFromController;
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

Route::get('/', [PagesController::class,'index']);
Route::get('/portfolio_details', [PagesController::class,'detail']);
Route::get('/admin', [PagesController::class,'admin']);
Route::get('/main', [MainController::class,'index']);
Route::put('/update', [MainController::class,'update']);
//Services  part
Route::get('/services.create', [ServicesController::class,'create']);
Route::post('/services.store', [ServicesController::class,'store']);
Route::get('/services.index', [ServicesController::class,'index']);
Route::get('/services.edit/{id}', [ServicesController::class,'edit']);
Route::post('/services.update/{id}', [ServicesController::class,'update']);
Route::delete('/services.delete/{id}', [ServicesController::class,'delete']);

//portfolio part

Route::get('/portfolio.create', [PortfolioController::class,'create']);

//About
Route::get('/about.create', [AboutController::class,'create']);
Route::get('/about.index', [AboutController::class,'index']);
Route::post('/about.store', [AboutController::class,'store']);
Route::get('/about.edit/{id}', [AboutController::class,'edit']);
Route::post('/about.update/{id}', [AboutController::class,'update']);
Route::delete('/about.delete/{id}', [AboutController::class,'delete']);

//Contact
Route::post('/contact.store', [ContactFromController::class,'store']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



