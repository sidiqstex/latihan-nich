<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // return "halaman user yes";
        $users = User::first();
        return "User: " . $users->created_at;
    }

    public function login(Request $request)
    {
        $judul = 'Login Page';
        return view('login', compact('judul'));
    }
    public function loginProccess(Request $request)
    {

        $user = User::where('email', $request->email)
            // ->where('password', Hash::make($request->password))
            ->first();
        $valid_password = Hash::check($request->password, $user->password);
        if ($user && $valid_password) {
            session(['user_email' => $user->email]);
        }
        return redirect()->route('article.index');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user_email');
        echo 'logout';
    }
}
