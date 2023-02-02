<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cartPageController;
use App\Http\Controllers\homePageController;
use App\Http\Controllers\salePageController;
use App\Http\Controllers\loginPageController;
use App\Http\Controllers\contactPageController;
use App\Http\Controllers\shoppingListPageController;

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

Route::get('/', [homePageController::class, 'index']);

Route::get('/sale', [salePageController::class, 'index']);

Route::get('/contact', [contactPageController::class, 'index']);

Route::get('/shoppingList', [shoppingListPageController::class, 'index']);

Route::get('/login', [loginPageController::class, 'index']);

Route::get('/cart', [cartPageController::class, 'index']);
