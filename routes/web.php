<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\TokensController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/generateToken','TokensController@generateToken');
// Route::get('/verifyToken','TokensController@verify');

Route::get('/generateToken',[ TokensController::class , 'generateToken']);
Route::get('/verifyToken', [ TokensController::class , 'verifyToken' ]);
