<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthApiControoler extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email',
            'phone' => 'required',
            'password' => 'required',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->save();
        return response()->json(['message' => 'Hi', 'user' => $user], 200);
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'email',
            'password' => 'required',
        ]);
        $user = User::where('email', $request->email)->first();
        $password = Hash::check($request->password, $user->password);
        if (!$user || !$password) {
            return response()->json(['message' => 'لا توجد بيانات بهذه المعلومات']);
        } else {
            $token = $user->createToken('userToken')->plainTextToken;
            return response()->json(['message' => 'هلا بيك', 'token' => $token, 'user' => $user], 200);
        };
    }
}
