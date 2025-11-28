<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin',function(){
  
    /* return "Esta es la pagina de ADMIN"; */ 
  
  return view('admin');
})->name('admin');