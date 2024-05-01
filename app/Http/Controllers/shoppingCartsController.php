<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\shoppinCcarts;
use Illuminate\Http\Request;

class shoppingCartsController extends Controller
{

    public function index()
    {
        return view('shopping-carts');
    }

    public function insert(Request $request)
    {
        $sourceProduct = Product::all()->first();
        $image = $sourceProduct->image;
        $product = new shoppinCcarts;
        $product->book_name = $request->book_name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->total = $request->total;
        $product->shipping = $request->shipping;
        $product->governorate = $request->governorate;
        $product->phone = $request->phone;
        $product->finaltotal = $request->finaltotal;
        $product->image = $request->image;



        $product->save();
        return view("shopping-carts");
    }


    
}
