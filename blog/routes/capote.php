<?php

use Illuminate\Support\Facades\Route;

Route::get('/capote',function(){
  return view('capote');
})->name('capote');