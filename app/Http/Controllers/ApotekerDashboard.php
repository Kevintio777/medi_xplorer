<?php

namespace App\Http\Controllers;

use App\Models\pasien;
use App\Models\RiwayatAlergi;
use App\Models\RiwayatObat;
use App\Models\RiwayatPenyakit;
use Illuminate\Http\Request;

class ApotekerDashboard extends Controller
{
    public function index()
    {
        $pasienCount = pasien::count();
        $obatCount = RiwayatObat::count();
        $alergiCount = RiwayatAlergi::count();
        $penyakitCount = RiwayatPenyakit::count();

        return view("apoteker-dashboard", compact("pasienCount", "obatCount", "alergiCount", "penyakitCount"));
    }
}
