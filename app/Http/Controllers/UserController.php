<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id)
    {
        return "halaman user yes. $id";
    }
}
