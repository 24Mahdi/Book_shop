<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users_requestController extends Controller
{
    public function index()
    {
        return view('Customer-requests');
    }
}
