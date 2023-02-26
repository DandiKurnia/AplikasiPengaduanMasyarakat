@extends('partials.main')

@section('heading')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pengaduan</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>
@endsection

@section('content')
    <div class="col-12">
        <div class="card o-hidden border-0 shadow-lg">
            <div class="card-body">
                <form action="{{ url('pengaduan') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <textarea id="" cols="" rows="5" class="form-control" name="isi_laporan"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="file" name="foto">
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Laporan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Nik</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Tanggal</th>
                                <th>Nik</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($data as $row)                                
                            <tr>
                                <td>{{ $row->tgl_pengaduan->format('d M Y') }}</td>
                                <td>{{ $row->user->name }}</td>
                                <td class="d-flex justify-content-center">
                                    <a href="{{ ('pengaduan/'.$row->id) }}" class="btn btn-primary btn-sm mr-2"><i class="fas fa-fw fa-eye"></i></a>
                                    {{-- <a href="" class="btn btn-warning btn-sm mr-2"><i class="fas fa-fw fa-pencil-alt"></i></a> --}}
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-fw fa-trash"></i></button>
                                </td>
                            </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection