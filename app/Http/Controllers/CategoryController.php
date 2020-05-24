<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   // Index solo necesita cargar la vista y renderizar categorias
    public function index()
    {
        return view('category.index');
    }


    public function all(){
        $categories = Category::all();
        return $categories;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        //
    }

    public function update(Request $request, Category $category)
    {
        //
    }


    public function destroy(Category $category)
    {
        $category->delete();
        return $category;
    }
}
