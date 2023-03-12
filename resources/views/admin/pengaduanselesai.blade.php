@extends('partials.main')

@section('content')
<div class="col-lg-12">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pengaduan Selesai</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Judul Laporan</th>
                            <th>Nik</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Judul Laporan</th>
                            <th>Nik</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @forelse ($data as $row)
                            <tr>
                                <td>{{ $row->tgl_pengaduan->format('d M Y') }}</td>
                                <td><p class="bg-success d-inline text-gray-100 p-1 rounded">{{ $row->status }}</p></td>
                                <td>{{ $row->judul_laporan }}</td>
                                <td>{{ $row->masyarakat->name }}</td>
                            </tr>
                        @empty
                        <tr>
                            <th colspan="4" class="text-center">Result not found.</th>
                        </tr>
                        @endforelse
                </table>
                {{ $data->links() }}
                {{-- <div class="d-flex justify-content-end mt-2 me-lg-3 me-2">
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection