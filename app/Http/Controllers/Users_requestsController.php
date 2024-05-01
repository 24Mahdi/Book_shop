<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users_requestsController extends Controller
{
    public function index()
    {
        return view('Users_requests');
    }
}
