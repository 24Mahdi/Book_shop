<?php

namespace App\Http\Controllers;

use App\Models\comments;
use App\Models\User;
use Illuminate\Http\Request;

class commentsController extends Controller
{



    public function insert(Request $request)
    {
        $comment = new comments;
        $comment->comments = $request->comments;

        $comment->save();
        return back();
    }
}
