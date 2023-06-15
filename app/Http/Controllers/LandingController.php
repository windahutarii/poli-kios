<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TbKios;
use App\Models\TbPemilik;


class LandingController extends Controller
{
    public function index()
    {

        $pemilik = TbPemilik::all();
        $pemilik2 = TbPemilik::all();
        $kios = TbKios::with('pemilik')->get();
        return view('landing', compact('pemilik', 'kios', 'pemilik2'));
        //$kios = TbKios::all();
        //return view("landing", compact("kios"));
        //return view('landing');
    }
}
