<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use PDF;

// use Barryvdh\DomPDF\PDF;

class ExportpdfController extends Controller
{
    public function index()
    {
        return view('admin.export.pdf');
    }

    public function exportPdf(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        
        $data = Pengaduan::whereBetween('tgl_pengaduan', [$startDate, $endDate])->get();
            
        $pdf = PDF::loadView('admin.export.exportpdf', compact('data','startDate','endDate'));

        return $pdf->stream('rekap-pengaduan.pdf');
    }
}
