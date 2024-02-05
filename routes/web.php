<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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
    return view('welcome');
});

route::get('/home',[BlogController::class, 'index']);
route::get('/about',[BlogController::class, 'about']);
route::get('/services',[BlogController::class, 'services']);
route::get('/contact',[BlogController::class, 'contact']);
route::post('/contact',[BlogController::class, 'contactForm']);
