<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyViewController;
use App\Http\Controllers\AuthController;
Route::get('/', [MyViewController::class, 'index']); 

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);


// Route::get('/Dashboard', [MyViewController::class, 'Dashboard'])->middleware('auth')->name('Dashboard');
Route::get('/Dashboard', [MyViewController::class, 'Dashboard'])->name('Dashboard');
Route::post('/update-switch-states', [MyViewController::class, 'updateSwitchStates'])->name('update.switch.states');

// Route::get('/Dashboard', [MyViewController::class, 'Dashboard'])->name('Dashboard'); 
// Route::get('/view3', [MyViewController::class, 'view3'])->name('login'); 
Route::get('/index', [MyViewController::class, 'index'])->name('index'); 
Route::get('/view4', [MyViewController::class, 'view4'])->name('info'); 
Route::get('/view5', [MyViewController::class, 'view5'])->name('profile'); 
Route::get('/view6', [MyViewController::class, 'view6']); 
