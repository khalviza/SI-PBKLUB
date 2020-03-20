<?php

namespace App\Http\Controllers;
use App\pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function pengguna()
    {
        $data_pengguna = pengguna::all();
        return view('admin.peneliti',['data_pengguna'=>$data_pengguna]);
    }

    function showaddpengguna()
    {
        $data_pengguna = pengguna::all();
        return view('admin.formpengguna',['data_pengguna'=>$data_pengguna]);
    }

    public function addpengguna(Request $req)
    {

        pengguna::create([
           
        'nama' =>$req->nama,
        'username' =>$req->username,
        'email' => $req->email,
        'nomorhp' => $req->nomorhp,
        'pendidikan' => $req->pendidikan,
        'instansi' => $req->instansi,
        'profil' => $req->profil,
        'password' => $req->password
        // 'bahan' => $req->bahan,
        // 'jumlah' => $req->jumlah

        ]);


        return redirect('/pengguna');
    }

    public function editpengguna($id)
    {
        $data_pengguna = pengguna::find($id);
        return view('admin.editpengguna',['data_pengguna' => $data_pengguna]);
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

        $data_pengguna = pengguna::find($id);
        $data_pengguna->nama = $req->nama;
        // $data_pengguna->username = $req->username;
        $data_pengguna->email = $req->email;
        $data_pengguna->nomorhp = $req->nomorhp;
        $data_pengguna->pendidikan = $req->pendidikan;
        $data_pengguna->instansi = $req->instansi;
        // $data_pengguna->profil = $req->profil;
        // $data_pengguna->password = $req->password;

        $data_pengguna->save();
        return redirect('/pengguna');
    }

    public function deletepengguna($id)
    {
        $data_pengguna = pengguna::find($id);
        $data_pengguna->delete();
        return redirect('/pengguna');
    } 

}
