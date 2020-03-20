<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerTeknikController extends Controller
{
    public function pengadaan()
    {
        return view('managerteknik.permohonanpengadaan');
    }

    public function dashboard()
    {
        return view('managerteknik.dashboard');
    }
}
