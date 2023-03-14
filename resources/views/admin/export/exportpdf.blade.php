<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Export PDF</title>
    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">     --}}
    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{ asset('css/sb-admin-2.min.cs') }}">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Export PDF</h1>
    <p>Start date : {{ Carbon\Carbon::parse($startDate)->format('d M Y') }}</p>
    <p>End date : {{ Carbon\Carbon::parse($endDate)->format('d M Y') }}</p>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>nama</th>
                <th>Nik</th>
                <th>Judul Laporan</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $row)
                <tr>
                    <td>{{ $row->tgl_pengaduan->format('d M Y') }}</td>
                    <td>{{ $row->masyarakat->name }}</td>
                    <td>{{ $row->masyarakat->nik }}</td>
                    <td>{{ $row->judul_laporan }}</td> 
                    <td>{{ $row->status }}</td> 
                </tr>
            @empty
            <tr>
                <th colspan="5" class="text-center">Result not found.</th>
            </tr>
            @endforelse
    </table>
    {{-- <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Judul Laporan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->masyarakat->name }}</td>
                    <td>{{ $row->judul_laporan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}
        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    
        <!-- Core plugin JavaScript-->
        <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    
        <!-- Custom scripts for all pages-->
        <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
</body>
</html>
