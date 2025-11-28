<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\postController;
use App\Http\Controllers\databaseController;

Route::get('/', [homeController::class,'index']);

Route::get('/posts', [postController::class, 'index']);

Route::get('/posts/create', [postController::class, 'createPost']);

Route::get('/posts/{post}', [postController::class, 'muestraPost']);

Route::get('/database', [databaseController::class,'index']);


/* Route::get('/posts/create',function() {
  return 'Aqui se muestra el formulario para crear un post';
});

Route::get('/posts/{post}',function($post) {
  return 'Aqui se muestra el post: '.$post;
});

Route::get('muestra/{incidente}/{categoria?}',function($incidente,$categoria=null) {
  if ($categoria)
    return 'Este es el incidente: '.$incidente.' de la categoria '.$categoria;
  return 'Este es el incidente: '.$incidente;
})
*/