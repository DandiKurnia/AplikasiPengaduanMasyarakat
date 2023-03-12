<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TanggapanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tanggapan $tanggapan): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tanggapan $tanggapan): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tanggapan $tanggapan): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tanggapan $tanggapan): RedirectResponse
    {
        //
    }

    public function showid($pengaduan_id)
    {
        $data = Pengaduan::where('id',$pengaduan_id)->first();
        // dd($data);
        return response()->view('admin.tanggpan',compact('data'));
    }

    public function updateTanggapan(Request $request,$pengaduan_id)
    {
        $tanggapan = Pengaduan::findOrFail($pengaduan_id);

        $status_sekarang = $tanggapan->status;
        if($status_sekarang == 'approve'){
            Pengaduan::findOrFail($pengaduan_id)->update([
                'status' => 'proses'
            ]);

            $this->validate($request,[
                'tanggapan' => 'required'
            ]);
    
            $data = Tanggapan::create([
                'users_id' => auth()->user()->id,
                'pengaduans_id' => $pengaduan_id,
                'tgl_tanggapan' => Carbon::now(),
                'tanggapan' => $request->tanggapan
            ]);

            return redirect('admin/pengaduan-proses')->with('success', 'Laporan diproses!');
        }elseif($status_sekarang == 'proses'){
            Pengaduan::findOrFail($pengaduan_id)->update([
                'status' => 'selesai'
            ]);

            $this->validate($request,[
                'tanggapan' => 'required'
            ]);
    
            $data = Tanggapan::create([
                'users_id' => auth()->user()->id,
                'pengaduans_id' => $pengaduan_id,
                'tgl_tanggapan' => Carbon::now(),
                'tanggapan' => $request->tanggapan
            ]);

            return redirect('admin/pengaduan-selesai')->with('success', 'Laporan selsai!');
        }
    }
}
