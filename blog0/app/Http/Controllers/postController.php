<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
  public function index(){
    /* $salida = '<h1>LISTADO DE POSTS</h1>';
    return $salida; */
    return view('posts.index');
  }

  public function createPost() {
    /* return 'CREACION DE UN POST'; */
    return view('posts/createPost');
  }

  public function muestraPost($post){
    /* return 'ESTE ES EL POST '.$post; */
    // compact('post'); Crea un array asi ['post'=>$post]

    // return view('posts/muestraPost', ['post'=>$post]);
    return view('posts/muestraPost', compact('post'));
  }
}