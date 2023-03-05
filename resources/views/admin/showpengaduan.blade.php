@extends('partials.main')
@section('css')
    <style>
        p{
            margin-bottom: 0.5rem!important;
        }
    </style>
@endsection

@section('heading')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pengaduan</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>
@endsection

@section('content')
    <div class="col-12 mb-4">
        <div class="card">
            <div class="card-body">
                <p>Nama : {{ $data->user->name }}</p>
                <p>NIK : {{ $data->user->nik }}</p>
                <p>Tanggal Pengaduan : {{ $data->tgl_pengaduan->format('l, F Y') }}</p>
                <div class="d-flex align-items-center">
                    @if ($data->status == 0)
                        <p class="mr-1">Status :</p><p class="bg-secondary text-gray-100" style="padding: 3px; border-radius: 0.25rem">pending</p>
                    @elseif ($data->status == 'proses')
                        <p class="mr-1">Status :</p><p class="bg-warning text-gray-100" style="padding: 3px; border-radius: 0.25rem">{{ $data->status }}</p>    
                    @elseif ($data->status == 'selesai')
                        <p class="mr-1">Status :</p><p class="bg-success text-gray-100" style="padding: 3px; border-radius: 0.25rem">{{ $data->status }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 mb-4">
        <div class="card">
            <div class="card-header">
                <div class="row text-center">
                    <div class="col-md-6 border-right">
                        <h5>Foto</h5>
                    </div>
                    <div class="col-md-6">
                        <h5>Isi Pengaduan</h5>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 border-right justify-content-center d-flex">
                        <img src="{{ asset('foto/'.$data->foto) }}" alt="" width="70%" style="border-radius: 10px;">
                    </div>
                    <div class="col-md-6">
                        <p>{{ $data->isi_laporan }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tanggapan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Nama Petugas</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Tanggal</th>
                                <th>Nama Petugas</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            {{-- @foreach ($data as $row)                                
                            <tr>
                                <td>{{ $row->tgl_pengaduan->format('d M Y') }}</td>
                                <td>{{ $row->user->name }}</td>
                                <td class="d-flex justify-content-center">
                                    <a href="{{ ('pengaduan/'.$row->id) }}" class="btn btn-primary btn-sm mr-2"><i class="fas fa-fw fa-eye"></i></a>
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-fw fa-trash"></i></button>
                                </td>
                            </tr>
                            @endforeach --}}
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection