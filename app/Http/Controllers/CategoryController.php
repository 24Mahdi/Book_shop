<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function  categryindex()
    {
        $categories = categories::all();
        return view('AllCategory', compact('categories'));
    }
    public function create()
    {
        return view('category');
    }
    public function insert(Request $request)
    {
        $categories = new categories;
        $categories->description = $request->description;
        $categories->save();
        return view("category");
    }
    public function edit($id)
    {
        $categories = categories::find($id);
        return view('editCategory', compact('categories'));
    }
    public function update(Request $request, $id)
    {

        $categories = categories::find($id);
        $categories->description = $request->description;
        $categories->save();
        return view("editCategory", compact('categories'));
    }
    public function delete($id)
    {
        $categories = categories::find($id);
        $categories->delete();
        return redirect()->route('categryindex');
    }
}
