<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cartPageController;
use App\Http\Controllers\homePageController;
use App\Http\Controllers\salePageController;
use App\Http\Controllers\loginPageController;
use App\Http\Controllers\logoutPageController;
use App\Http\Controllers\accountPageController;
use App\Http\Controllers\contactPageController;
use App\Http\Controllers\categoryPageController;
use App\Http\Controllers\registerPageController;
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

Route::get('/sale/{item}', [salePageController::class, 'show']);

Route::get('/contact', [contactPageController::class, 'index']);

Route::get('/shoppingList', [shoppingListPageController::class, 'index']);

Route::get('/login', [loginPageController::class, 'index']);

Route::post('/login', [loginPageController::class, 'login']);

Route::get('/register', [registerPageController::class, 'index']);

Route::post('/register', [registerPageController::class, 'store']);

Route::get('/cart', [cartPageController::class, 'index']);

Route::get('/account', [accountPageController::class, 'index']);

Route::get('/account/items', [accountPageController::class, 'show']);

Route::get('/account/item/{item}', [accountPageController::class, 'showItem']);

Route::get('/account/createItem', [accountPageController::class, 'create']);

Route::post('/account/storeItem', [accountPageController::class, 'store']);

Route::put('/account/updateItem/{item}', [accountPageController::class, 'update']);

Route::delete('/account/delete/{item}', [accountPageController::class, 'delete']);

Route::get('/account/edit/{item}', [accountPageController::class, 'edit']);

Route::get('/logout', [logoutPageController::class, 'index']);

Route::get('/{category}', [categoryPageController::class, 'showCategory']);

Route::get('/{category}/{group}', [categoryPageController::class, 'showCategoryGroup']);

Route::get('/{category}/{group}/{item}', [categoryPageController::class, 'showCategoryGroupItem']);
