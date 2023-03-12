<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class PengaduanMasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return response()->view('masyarakat.pengaduan');
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
            'foto' => 'required|image',
            'judul_laporan' => 'required'
        ],[
            'isi_laporan.required' => 'Laporan wajib di isi',
            'judul_laporan.required' => 'Judul Laporan wajib di isi',
            'foto.required' => 'Foto wajib di isi',
            'foto.image' => 'Harus berupa foto'
        ]);

        $data = Pengaduan::create([
            'tgl_pengaduan' => Carbon::now(),
            'masyarakat_id' => Auth::guard('masyarakat')->user()->id,
            'isi_laporan' => $request->isi_laporan,
            'foto' => $request->foto,
            'judul_laporan' => $request->judul_laporan
        ]);

        if ($request->hasFile('foto')) {
            $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        // dd($data);
        return redirect('/pengaduan')->with('success','Pengaduan telah dikiri');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengaduan $pengaduan): Response
    {
        $data = Pengaduan::findOrFail($pengaduan->id);
        $tanggapan = Tanggapan::where('pengaduans_id',$pengaduan->id)->with(['users','pengaduans'])->get();
        // dd($tanggapan);
        return response()->view('masyarakat.showpengaduan',compact('data','tanggapan'));
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

    public function pengaduan(){
        $data = Pengaduan::where('masyarakat_id', auth()->guard('masyarakat')->user()->id)->paginate(10);
        return view('masyarakat.daftar-pengaduan',compact('data'));
    }
}
