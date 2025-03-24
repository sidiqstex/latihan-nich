<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // return "halaman user yes";
        $users = User::first();
        return "User: " . $users->created_at;
    }
}
