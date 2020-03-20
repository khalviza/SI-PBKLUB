<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bahan;
use App\logbookPengguna;

class LogbookController extends Controller
{
    public function logbook()
    {
        $data_logbook = bahan::all();
        return view('users.logbook',['data_logbook'=>$data_logbook]);
    }

    function showaddlog()
    {
        $data_logbook = bahan::select('id','nama','jumlah')->get();
        $data_logbook2 = logbookPengguna::all();
        // $data_logbook2 = logbookPengguna::select('id','nama_bahan','jumlah')
                            
        //                     ->get();
        // dd($data_logbook2);
        return view('users.logbook',['data_logbook'=>$data_logbook],['data_logbook2'=>$data_logbook2]);
    }

    public function addlog(Request $req)
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

        logbookPengguna::create([
            'nama' => $req->nama,
            'jumlah' => $req->jumlah,
            'created_at' => $req->created_at

        ]);
        return redirect('/logbook');
    }

}
