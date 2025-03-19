<?php

namespace App\Http\Controllers;

use App\Models\Postingan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return "This Single";
    }

    public function index()
    {
        $postingan = Postingan::orderBy('judul', 'DESC')->get();
        return view('home', ['postingan' => $postingan]);
    }
}
