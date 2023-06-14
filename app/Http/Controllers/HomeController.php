<?php

namespace App\Http\Controllers;

use App\Models\TbPemilik;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function adminHome()
    {
        $pemilik = TbPemilik::all();
        return view('admin.home', compact("pemilik"));
    }

    public function userHome()
    {
        return view('user.home');
    }

    public function userKoleksi()
    {
        return view('user.koleksi');
    }

    public function userDetail()
    {
        return view('user.detail');
    }
}
