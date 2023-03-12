<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $data = Pengaduan::all();
    return response()->view('admin.pengaduan', compact('data'));
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
        $this->validate($request, [
            'isi_laporan' => 'required',
            'foto' => 'required',
        ]);

        if (Auth::guard('masyarakat')->user()) {
            $data = Pengaduan::create([
                'tgl_pengaduan' => Carbon::now(),
                'user_id' => Auth::guard('masyarakat')->user()->id,
                'isi_laporan' => $request->isi_laporan,
                'foto' => $request->foto,
            ]);
        }else{
            $data = Pengaduan::create([
                'tgl_pengaduan' => Carbon::now(),
                'user_id' => auth()->user()->id,
                'isi_laporan' => $request->isi_laporan,
                'foto' => $request->foto,
            ]);
        }

        if ($request->hasFile('foto')) {
            $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        // dd($request->all());
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengaduan $pengaduan): Response
    {
        $data = Pengaduan::findOrFail($pengaduan->id);
        $tanggapan = Tanggapan::where('pengaduans_id',$pengaduan->id)->with(['users','pengaduans'])->get();
        return response()->view('admin.showpengaduan',compact('data','tanggapan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengaduan $pengaduan): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengaduan $pengaduan): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengaduan $pengaduan): RedirectResponse
    {
        //
    }

    public function pengaduanMasuk(){
        $data = Pengaduan::where('status','0')->paginate(25);
        return view('admin.pengaduanmasuk',compact('data'));
    }

    public function pengaduanTolak(){
        $data = Pengaduan::where('status','reject')->paginate(25);
        return view('admin.pengaduantolak',compact('data'));
    }
    
    public function pengaduanTerima(){
        $data = Pengaduan::where('status','approve')->paginate(25);
        return view('admin.pengaduanterima',compact('data'))->with('success', 'Laporan ditermia!');
    }

    public function pengaduanProses(){
        $data = Pengaduan::where('status','proses')->paginate(25);
        return view('admin.pengaduanproses',compact('data'));
    }

    public function pengaduanSelesai(){
        $data = Pengaduan::where('status','selesai')->paginate(25);
        return view('admin.pengaduanselesai',compact('data'));
    }

    public function approve($id)
    {
        Pengaduan::where('id',$id)->update([
            'status' => 'approve'
        ]);
        return redirect('/admin/pengaduan-terima');
    }

    public function reject($id)
    {
        Pengaduan::where('id',$id)->update([
            'status' => 'reject'
        ]);
        return redirect('/admin/pengaduan-tolak');
    }
}
