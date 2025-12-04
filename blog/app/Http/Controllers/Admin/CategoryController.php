<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $categories = Category::orderBy('id','desc')->get();
    return view('admin.categories.index',
    compact('categories'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('admin.categories.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    // Validaciones de los datos que hemos introducido
    $data = $request->validate (
      ['name' => 'required|string|min:3|max:255']
    );
    
    // Con el dato recuperado en la variable $data 
    Category::create($data);

    // Creamos una sesion flash para controlar que aparezca el alert en sidebar.blade.php

    session()->flash('session_flash',[
      'title' => "Bien hecho!!!",
      'icon' => "success",
      'text' => "Categoria creada",
    ]);

    return redirect()->route('admin.categories.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(Category $category)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Category $category)
  {
    return view('admin.categories.edit', compact('category'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Category $category)
  {
      /*
      return $request->all();
      */

      // Validaciones de los datos que hemos introducido
      $data = $request->validate (
        [
          'id'=>'required|int',
          'name' => 'required|string|min:3|max:255',
        ]
      );
      
      // Actualizamos $category con el metodo update y el contenido de $data
      $category->update($data);

      // Creamos una sesion flash para controlar que aparezca el alert en sidebar.blade.php

      session()->flash('session_flash',[
        'title' => "Bien hecho!!!",
        'icon' => "success",
        'text' => "Categoria actualizada",
      ]);

      return redirect()->route('admin.categories.edit',$category);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Category $category)
  {
      //
  }
}
