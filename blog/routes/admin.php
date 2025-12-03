<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;

/* Route::get('/',function(){
  return view('admin');
}); */


Route::resource('categories', CategoryController::class);  // Creamos un recurso llamado categories y quien lo controla
