@extends('partials.main')

@section('heading')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Export PDF</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>
@endsection

@section('content')
    <div class="col-12">
        <div class="card o-hidden border-0 shadow-lg">
            <div class="card-body">
                <div class="bg-primary text-gray-100 p-3 rounded mb-2">
                    Rekap Pengaduan
                </div>
                <form method="POST" action="{{ route('export.pdf') }}">
                    @csrf
                    <div class="form-group">
                        <label for="start_date">Start date:</label>
                        <input type="date" name="start_date" id="start_date" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="end_date">End date:</label>
                        <input type="date" name="end_date" id="end_date" class="form-control" required>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection