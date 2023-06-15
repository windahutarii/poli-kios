<?php

namespace App\Http\Controllers;

use App\Models\TbKios;
use App\Models\TbPemilik;
use App\Models\TbKios;
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
        $kios = TbKios::with('pemilik')->get();
        $pemilik = TbPemilik::all();
        $pemilik2 = TbPemilik::all();
        $kios = TbKios::with('pemilik')->get();
        return view('admin.home', compact('pemilik', 'kios', 'pemilik2'));

        //return view::make('admin.home')->with(compact('pemilik'))->with(compact('kios'));
    }

    public function userHome()
    {
        $pemilik = TbPemilik::all();
        $pemilik2 = TbPemilik::all();
        $kios = TbKios::with('pemilik')->get();
        return view('user.home', compact('pemilik', 'kios', 'pemilik2'));
    }

    public function userKoleksi()
    {
        $pemilik = TbPemilik::all();
        $pemilik2 = TbPemilik::all();
        $kios = TbKios::with('pemilik')->get();
        return view('user.koleksi', compact('pemilik', 'kios', 'pemilik2'));
    }

    public function userDetail($id)
    {
        TbKios::where('id_kios', $id)->delete();
        return redirect()->route('user.detail')->with('success', 'Data pemilik berhasil dihapus.');
    }
    /* public function userDetail()
    {
        return view('user.detail');
    }*/
}
