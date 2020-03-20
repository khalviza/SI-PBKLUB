<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\analis;

class AnalisController extends Controller
{
    public function analis()
    {
        $data_analis = analis::all();
        return view('admin.analis',['data_analis'=>$data_analis]);
    }

    function showaddanalis()
    {
        $data_analis = analis::all();
        return view('admin.formanalis',['data_analis'=>$data_analis]);
    }

    public function addanalis(Request $req)
    {

        analis::create([
           
        'nama' =>$req->nama,
        'username' =>$req->username,
        'email' => $req->email,
        'nomorhp' => $req->nomorhp,
        'profil' => $req->profil,
        'password' => $req->password
        // 'bahan' => $req->bahan,
        // 'jumlah' => $req->jumlah

        ]);


        return redirect('/analis');
    }

    public function editanalis($id)
    {
        $data_analis = analis::find($id);
        return view('admin.editanalis',['data_analis' => $data_analis]);
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

        $data_analis = analis::find($id);
        $data_analis->nama = $req->nama;
        // $data_analis->username = $req->username;
        $data_analis->email = $req->email;
        $data_analis->nomorhp = $req->nomorhp;
        // $data_analis->profil = $req->profil;
        // $data_analis->password = $req->password;

        $data_analis->save();
        return redirect('/analis');
    }

    public function deleteanalis($id)
    {
        $data_analis = analis::find($id);
        $data_analis->delete();
        return redirect('/analis');
    } 
}
