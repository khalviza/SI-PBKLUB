<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\bahan;
use validator;
use Alert;

class BahanController extends Controller
{
    public function bahan()
    {
        $data_bahan = bahan::all();
        return view('admin.bahan',['data_bahan'=>$data_bahan]);
    }

    function showaddbahan()
    {
        $data_bahan = bahan::all();
        return view('admin.formbahan',['data_bahan'=>$data_bahan]);
    }

    public function addbahan(Request $req)
    {
        /*\App\bahan::create($request->all());*/

        // $this->validate($req, [
        //     'nama' => 'required',
        //     'kode' => 'required',
        //     'jenis' => 'required',
        //     'tempat_penyimpanan' => 'required',
        //     'jumlah' => 'required',
        //     'harga' => 'required'
        // ]);

        bahan::create([
            'nama' => $req->nama,
            'kode' => $req->kode,
            'jenis' => $req->jenis,
            'tempat_penyimpanan' => $req->tempat_penyimpanan,
            'jumlah' => $req->jumlah,
            'harga' => $req->harga,
            'satuan' => $req->satuan

        ]);


        return redirect('/bahan');
    }

    public function editbahan($id)
    {
        $data_bahan = bahan::find($id);
        return view('admin.editbahan',['data_bahan' => $data_bahan]);
    }

    public function update($id, Request $req)
    {
        // $this->validate($req, [
        //     'nama' => 'required',
        //     'kode' => 'required',
        //     'jenis' => 'required',
        //     'tempat_penyimpanan' => 'required',
        //     'jumlah' => 'required',
        //     'harga' => 'required'
        // ]);

        $data_bahan = bahan::find($id);
        $data_bahan->nama = $req->nama;
        $data_bahan->kode = $req->kode;
        $data_bahan->jenis = $req->jenis;
        $data_bahan->tempat_penyimpanan = $req->tempat_penyimpanan;
        $data_bahan->jumlah = $req->jumlah;
        $data_bahan->harga = $req->harga;
        $data_bahan->satuan = $req->satuan;

        $data_bahan->save();
        return redirect('/bahan');
    }

    public function deletebahan($id)
    {
        $data_bahan = bahan::find($id);
        $data_bahan->delete();
        return redirect('/bahan');
    } 

    public function pengadaanbahan()
    {
        return view('admin.formpengadaanbahan');
    }

    public function detailpenggunaan()
    {
        return view('admin.detailpenggunaan');
    }
}
