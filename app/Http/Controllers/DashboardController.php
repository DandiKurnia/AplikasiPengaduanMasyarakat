<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $pengaduanMasuk = Pengaduan::where('status','0')->count();
        $pengaduanTerima = Pengaduan::where('status', 'approve')->count();
        $pengaduanTolak = Pengaduan::where('status','reject')->count();
        $pengaduanProses = Pengaduan::where('status', 'proses')->count();
        $pengaduanSelesai = Pengaduan::where('status', 'selesai')->count();
        return view('dashboard', compact('pengaduanMasuk','pengaduanTerima','pengaduanTolak','pengaduanProses','pengaduanSelesai'));
    }
}
