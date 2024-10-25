<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->paginate(3);
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'icon' => 'required|max:255',
            'image' => 'required|mimes:jpg,jpeg,png|max:1024|required'
        ]);

        // Crear Slider (Aqui se sube un slider a la base de datos)
        $category = new Category();
        $category->name = $request->get('name');
        $category->icon = $request->get('icon');

        if ($request->hasFile('image')) {
            $imagen = $request->file('image');
            $nameImage = "images/categories/" . uniqid() . '.' . $imagen->guessExtension();
            $ruta = public_path("images/categories/");
            $imagen->move($ruta, $nameImage);
            $category->image = $nameImage;
        }

        $category->save();

        return redirect()->route('categories.index')
            ->with(['msg' => 'Categoria creada correctamente']);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
