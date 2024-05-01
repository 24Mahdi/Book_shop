<?php

namespace App\Http\Controllers;

use App\Models\comments;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $comment = comments::all();
        $users = User::all();
        return view('index2', compact('products', 'comment', 'users'));
    }
    public function book()
    {
        $products = Product::all();
        return view('Show_books_page', compact('products'));
    }
    public function cart()
    {
        return view('shopping-carts');
    }
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'book_name' => $product->book_name,
                'price' => $product->price,
                'image' => $product->image,
                'quantity' => 1
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'تم أضافة الى السلة');
    }

    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
                return response()->json(['success' => 'Product removed from cart']);
            }
        }
        return response()->json(['error' => 'Product not found in cart']);
    }

    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                $cart[$request->id]['quantity'] = $request->quantity;
                session()->put('cart', $cart);
                session()->flash('success', 'تمت الإضافة بنجاح');
            }
        }
    }
}
