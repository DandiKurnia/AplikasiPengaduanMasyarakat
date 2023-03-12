@extends('masyarakat.layout.main')

{{-- @section('heading')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pengaduan</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>
@endsection --}}

@section('content')
<div class="col-12 mb-4">
    <div class="card">
        <div class="card-body">
            <p>Nama : {{ $data->masyarakat->name }}</p>
            <p>NIK : {{ $data->masyarakat->nik }}</p>
            <p>Tanggal Pengaduan : {{ $data->tgl_pengaduan->format('l, F Y') }}</p>
            <div class="d-flex align-items-center">
                @if ($data->status == 0)
                <p class="mr-1">Status :</p>
                <p class="bg-secondary text-gray-100" style="padding: 3px; border-radius: 0.25rem">pending</p>
                @elseif ($data->status == 'approve')
                <p class="mr-1">Status :</p>
                <p class="bg-success text-gray-100" style="padding: 3px; border-radius: 0.25rem">{{ $data->status }}</p>
                @elseif ($data->status == 'proses')
                <p class="mr-1">Status :</p>
                <p class="bg-warning text-gray-100" style="padding: 3px; border-radius: 0.25rem">{{ $data->status }}</p>
                @elseif ($data->status == 'selesai')
                <p class="mr-1">Status :</p>
                <p class="bg-success text-gray-100" style="padding: 3px; border-radius: 0.25rem">{{ $data->status }}</p>
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
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Tanggal</th>
                            <th>Nama Petugas</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($tanggapan as $row)
                        <tr>
                            <td>{{ $row->tgl_tanggapan->format('d M Y') }}</td>
                            <td>{{ $row->users->name ?? '' }}</td>
                            <td class="d-flex justify-content-center">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#exampleModal-{{ $row->id }}">
                                    <i class="fas fa-fw fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

@foreach ($tanggapan as $item)    
    <form method="GET">
        <div class="modal fade" id="exampleModal-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tanggaman</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Tanggal Tanggapan : {{ $item->tgl_tanggapan->format('d M Y') }}</p>
                        <p>Tangapan : </p>
                        <p>{{ $item->tanggapan }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endforeach
@endsection
