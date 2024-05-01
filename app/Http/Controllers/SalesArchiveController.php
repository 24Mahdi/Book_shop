<?php

namespace App\Http\Controllers;

use App\Models\shoppinCcarts;
use Illuminate\Http\Request;

class SalesArchiveController extends Controller
{
    public function index()
    {
        $products = shoppinCcarts::withTrashed()->get();

        return view('Sales-archive', compact('products'));
    }

    public function restoreAllProducts()
    {
        shoppinCcarts::onlyTrashed()->restore();

        return redirect()->back()->with('success', 'تم استعادة جميع المنتجات المحذوفة بنجاح.');
    }
}
