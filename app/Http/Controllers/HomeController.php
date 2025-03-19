<?php

namespace App\Http\Controllers;

use App\Models\Postingan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        // $postingan = Postingan::orderBy('judul', 'DESC')->get();
        // $postingan = DB::table('postingan')
        // ->where('judul', 'like', '%something%')
        // ->orderBy('judul', 'Desc')
        // ->get();
        $postingan = DB::select("SELECT * FROM postingan WHERE judul like '%%'");
        return view('home', ['postingan' => $postingan]);
    }
}
