<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

// CONECTAR CON CONTROLADOR MANERA 2
// RUTAS PARA DINAMICAS PARA LOS CONTROLADORES | CHECAR CONTROLADOR
//app/http/controllers
Route::controller(PageController::class)->group(function () {
        Route::get('/',                'home')->name('home');
        Route::get('blog/{post:slug}', 'post')->name('post'); //propiedad del post
});


Route::redirect('dashboard', 'posts')->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::resource('posts', PostController::class)->middleware(['auth', 'verified'])->except('show');
}); 
// Route::resource('posts', PostController::class)->except(['show']);

require __DIR__.'/auth.php';
