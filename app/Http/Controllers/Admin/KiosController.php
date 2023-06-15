<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TbKios;
use Illuminate\Http\Request;

class KiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $data_kios = TbKios::all();
        // return view("admin.home", compact("data_kios"));
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
            'id_pemilik' => 'required',
            'nama_kios' => 'required',
            'alamat' => 'required',
            'deskripsi' => 'required',
            'sertifikat' => 'required',
            'luas_tanah' => 'required',
            'luas_bangunan' => 'required',
            'lantai' => 'required',
            'wastafel' => 'required',
            'kamar_mandi' => 'required',
            'wifi' => 'required',
            'foto_kios' => 'image | mimes:jpeg,png,jpg,gif,svg | max:2048',
            'status_terjual' => 'required',
            'harga_jual' => 'required'
        ]);

        $kios = new TbKios;
        //$kios = TbKios::find($id);
        $kios->id_pemilik = $request->id_pemilik;
        $kios->nama_kios = $request->nama_kios;
        $kios->alamat = $request->alamat;
        $kios->deskripsi = $request->deskripsi;
        $kios->sertifikat = $request->sertifikat;
        $kios->luas_tanah = $request->luas_tanah;
        $kios->luas_bangunan = $request->luas_bangunan;
        $kios->lantai = $request->lantai;
        $kios->wastafel = $request->wastafel;
        $kios->foto_kios = $request->foto_kios;
        $kios->kamar_mandi = $request->kamar_mandi;
        $kios->wifi = $request->wifi;
        //ini fotonya itu gmna sii // tadi gini salah
        if ($request->hasFile('foto_kios')) {
            $file = $request->file('foto_kios');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/kios/', $filename);
            $kios->foto_kios = $filename;
        }

        $kios->status_terjual = $request->status_terjual;
        $kios->harga_jual = $request->harga_jual;
        $kios->save();

        return redirect()->route('admin.home')->with('success', 'Data kios berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kios_detail = TbKios::find($id);
        return route('user.detail', compact('kios_detail'));
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
            'id_pemilik' => 'required',
            'nama_kios' => 'required',
            'alamat' => 'required',
            'deskripsi' => 'required',
            'sertifikat' => 'required',
            'luas_tanah' => 'required',
            'luas_bangunan' => 'required',
            'lantai' => 'required',
            'wastafel' => 'required',
            'kamar_mandi' => 'required',
            'wifi' => 'required',
            'foto_kios' => 'image | mimes:jpeg,png,jpg,gif,svg | max:2048',
            'status_terjual' => 'required',
            'harga_jual' => 'required'
        ]);

        $kios = TbKios::find($id);

        $kios->id_pemilik = $request->id_pemilik;
        $kios->nama_kios = $request->nama_kios;
        $kios->alamat = $request->alamat;
        $kios->deskripsi = $request->deskripsi;
        $kios->sertifikat = $request->sertifikat;
        $kios->luas_tanah = $request->luas_tanah;
        $kios->luas_bangunan = $request->luas_bangunan;
        $kios->lantai = $request->lantai;
        $kios->wastafel = $request->wastafel;
        $kios->foto_kios = $request->foto_kios;
        $kios->kamar_mandi = $request->kamar_mandi;
        $kios->wifi = $request->wifi;
        if ($request->hasFile('foto_kios')) {
            $file = $request->file('foto_kios');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/kios/', $filename);
            $kios->foto_kios = $filename;
        }
        $kios->status_terjual = $request->status_terjual;
        $kios->harga_jual = $request->harga_jual;
        $kios->save();

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
        TbKios::where('id_kios', $id)->delete();
        return redirect()->route('admin.home')->with('success', 'Data pemilik berhasil dihapus.');
    }
}
