<?php

namespace App\Http\Controllers;

use App\Models\Postingan;
use Exception;
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
        // try {
        //     $postingan = Postingan::findOrFail('C7A364AC-E451-4016-AC06-D1C850CA980B');
        //     return view('home', ['postingan' => $postingan]);
        // } catch (Exception $e) {
        //     return abort(403);
        // }
        // $postingan = DB::table('testview')
        //     ->where('judul', 'like', '%%')
        //     ->get();

        $postingan = DB::select(DB::raw("(SELECT * FROM postingan) as subquery"));
        return view('home', ['postingan' => $postingan]);
    }
}
