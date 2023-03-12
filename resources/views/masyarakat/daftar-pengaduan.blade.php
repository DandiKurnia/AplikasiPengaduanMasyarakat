@extends('masyarakat.layout.main')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pengaduan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Name</th>
                            <th>Judul Laporan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Name</th>
                            <th>Judul Laporan</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @forelse ($data as $row)
                        <tr>
                            <td>{{ $row->tgl_pengaduan->format('d M Y') }}</td>
                            @if ($row->status == "0")
                                <td><p class="bg-secondary d-inline text-gray-100 p-1 rounded">pending</p></td>
                            @elseif ($row->status == "reject")
                                <td><p class="bg-danger d-inline text-gray-100 p-1 rounded">{{ $row->status }}</p></td>
                            @elseif ($row->status == "approve")
                                <td><p class="bg-success d-inline text-gray-100 p-1 rounded">{{ $row->status }}</p></td>
                            @elseif ($row->status == "proses")
                                <td><p class="bg-warning d-inline text-gray-100 p-1 rounded">{{ $row->status }}</p></td>
                            @elseif ($row->status == "selesai")
                                <td><p class="bg-success d-inline text-gray-100 p-1 rounded">{{ $row->status }}</p></td>
                            @endif
                            <td>{{ $row->masyarakat->name }}</td>
                            <td>{{ $row->judul_laporan }}</td>
                            <td>
                                <a href="{{ ('pengaduan/'.$row->id) }}" class="btn btn-primary btn-sm mr-2"><i class="fas fa-fw fa-eye"></i></a>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <th colspan="5" class="text-center">Result not found.</th>
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