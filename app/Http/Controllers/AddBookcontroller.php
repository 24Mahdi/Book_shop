<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Product;

class AddBookcontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }
    public function Dashboard()
    {
        $products = Product::paginate(5);
        return view('Dashboard', compact('products'));
    }
    public function Category()
    {
        $Categories = categories::all();
        return view('add_book', compact('Categories'));
    }

    public function create()
    {
        return view('add_book');
    }
    public function insert(Request $request)
    {
        $product = new Product;
        $product->book_name = $request->book_name;
        $product->book_description = $request->book_description;
        $product->Author = $request->Author;
        $product->lang = $request->lang;
        $product->price = $request->price;
        $product->Book_section = $request->Book_section;

        if ($request->file('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $filename = str_replace(' ', '-', $filename);
            $image->move('public/image/product', $filename);
            $product->image =  'product' . '/' . $filename;
        }

        $product->save();
        return view("add_book");
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('update-book', compact('product'));
    }
    public function update(Request $request, $id)
    {

        $product = Product::find($id);
        $product->book_name = $request->book_name;
        $product->book_description = $request->book_description;
        $product->Author = $request->Author;
        $product->lang = $request->lang;
        $product->price = $request->price;
        $product->Book_section = $request->Book_section;

        if ($request->file('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $filename = str_replace('', '-', $filename);
            $image->move('public/image/product', $filename);
            $product->image = 'product' . '/' . $filename;
        }
        $product->save();
        return redirect()->route('Dashboard');
    }


    public function delete($id)
    {
        $product = Product::find($id);
        $delete = 'public/image/product' . $product->image;
        if (File::exists($delete)) {
            File::delete($delete);
        }
        $product->delete();
        return redirect()->route('Dashboard');
    }
}
