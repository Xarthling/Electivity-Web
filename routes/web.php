<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyViewController;


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
    return view('/view3');
});

Route::get('/view1', [MyViewController::class, 'view1']);
Route::get('/view2', [MyViewController::class, 'view2'])->name('signup');
Route::get('/view2', [MyViewController::class, 'view2'])->name('Login');
Route::get('/view3', [MyViewController::class, 'view3'])->name('index');
Route::get('/view4', [MyViewController::class, 'view4']);
Route::get('/view5', [MyViewController::class, 'view5'])->name('profile');;
Route::get('/view6', [MyViewController::class, 'view6']);
