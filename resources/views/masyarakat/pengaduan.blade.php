@extends('masyarakat.layout.main')

@section('content')
<div class="col-lg-12">
    @if(count($errors)>0)
        <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <form action="{{ url('pengaduan') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="judul_laporan" placeholder="Judul Laporan"
                        value="{{ old('judul_laporan') }}" required>
                </div>
                <div class="form-group">
                    <textarea id="" cols="" rows="5" class="form-control" name="isi_laporan" required></textarea>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="foto">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
