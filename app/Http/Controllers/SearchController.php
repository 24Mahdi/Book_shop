<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {

        if ($request->ajax()) {
            $data = Product::where('book_name', 'LIKE', '%' . $request->book_name . '%')->get();
            $result = '';
            if (count($data) > 0) {
                $result = '<ul>';
                foreach ($data as $item) {
                    $result .= '<li>' . $item->book_name . '</li>';
                }
                $result .= '</ul>';
            } else {
                $result .= '<li>لا نوجد بيانات</li>';
            }
            return $result;
        }
        return view('Dashboard');
    }
}
