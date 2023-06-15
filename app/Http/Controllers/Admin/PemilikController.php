<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TbPemilik;
use Illuminate\Http\Request;

class PemilikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_pemilik = TbPemilik::all();
        return view("admin.home", compact("data_pemilik"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pemilik' => 'required',
            'alamat' => 'required',
            'email' => 'required | email',
            'perusahaan' => 'required',
            'no_hp' => 'required',
            'no_wa' => 'required',
            'foto' => 'image | mimes:jpeg,png,jpg,gif,svg | max:2048'
        ]);

        $pemilik = new TbPemilik;
        $pemilik->nama_pemilik = $request->nama_pemilik;
        $pemilik->alamat = $request->alamat;
        $pemilik->email = $request->email;
        $pemilik->perusahaan = $request->perusahaan;
        $pemilik->no_hp = $request->no_hp;
        $pemilik->no_wa = $request->no_wa;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/pemilik/', $filename);
            $pemilik->foto = $filename;
        }
        $pemilik->save();

        return redirect()->route('admin.home')->with('success', 'Data pemilik berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pemilik' => 'required',
            'alamat' => 'required',
            'email' => 'required | email',
            'perusahaan' => 'required',
            'no_hp' => 'required',
            'no_wa' => 'required',
            'foto' => 'image | mimes:jpeg,png,jpg,gif,svg | max:2048'
        ]);

        $pemilik = TbPemilik::find($id);
        $pemilik->nama_pemilik = $request->nama_pemilik;
        $pemilik->alamat = $request->alamat;
        $pemilik->email = $request->email;
        $pemilik->perusahaan = $request->perusahaan;
        $pemilik->no_hp = $request->no_hp;
        $pemilik->no_wa = $request->no_wa;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/pemilik/', $filename);
            $pemilik->foto = $filename;
        }
        $pemilik->save();

        return redirect()->route('admin.home')->with('success', 'Data pemilik berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TbPemilik::where('id_pemilik', $id)->delete();
        return redirect()->route('admin.home')->with('success', 'Data pemilik berhasil dihapus.');
    }
}
