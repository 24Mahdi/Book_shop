<?php

namespace App\Http\Controllers;

use App\Models\shoppinCcarts;

class CustomerRequestsController extends Controller
{
    public function index()
    {
        $products = shoppinCcarts::paginate(1);
        return view('Customer-requests', compact('products'));
    }

    public function delete($id)
    {
        $product = shoppinCcarts::find($id);
        if ($product) {
            $product->delete();
            return redirect()->back()->with('success', 'تم حذف الطلب بنجاح.');
        }
        return redirect()->back()->with('error', 'لم يتم العثور على الطلب.');
    }
    public function shipping($id)
    {
        $product = shoppinCcarts::find($id);
        if ($product) {
            $product->delete();
            return redirect()->back()->with('success', 'تم توصيل الطلب بنجاح.');
        }
        return redirect()->back()->with('error', 'لم يتم العثور على الطلب.');
    }
}
