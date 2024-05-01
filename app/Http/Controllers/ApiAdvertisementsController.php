<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisements;


class ApiAdvertisementsController extends Controller
{

    public function Advertisements_index()
    {
        $categories = Advertisements::all();
        return response()->json([
            "message" => " success", "categories" => $categories
        ]);
    }
    public function Advertisements_insert(Request $request)
    {
        $this->validate(
            $request,
            ['Advertising' => 'string|required']
        );

        $category = new Advertisements;
        $category->Advertising = $request->Advertising;
        $category->save();
        return response()->json([
            "message" => " success", "category" => $category
        ], 200);
    }
    public function Advertisements_update(Request $request, $id)
    {
        $this->validate(
            $request,
            ['Advertising' => 'string|required']
        );
        $category =  Advertisements::find($id);
        $category->Advertising = $request->Advertising;
        $category->update();
        return response()->json(["message" => " success ", "category" => $category], 200);
    }
    public function Advertisements_remove($id)
    {
        $category = Advertisements::find($id);
        if ($category != null || $category != '') {
            $category->delete();

            return response()->json(["message" => "success"], 200);
        } else {
            return response()->json(["message" => " fail"], 404);
        }
    }
}
