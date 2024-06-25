<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

/*Route::redirect('/', 'home');*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(AdminMiddleware::class);


/* CRUD Users */
Route::resource('users', UserController::class)->middleware(AdminMiddleware::class);

/* Route for User Administration */
/*Route::group(['middleware' => 'admin'], function () {*/
    /* CRUD Centro de costo 
    Route::resource('mt01cecos', Mt01cecoController::class);*/
    
    /* CRUD Fallas 
    Route::resource('mt01fallas', Mt01fallaController::class);*/

    /* CRUD Tecnicos 
    Route::resource('mt01tecns', Mt01tecnController::class);*/

    /* CRUD Turnos 
    Route::resource('mt01turns', Mt01turnController::class);*/

    /* CRUD Users */
    /*Route::resource('users', UserController::class);
});*/
