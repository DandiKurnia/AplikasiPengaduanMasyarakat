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
        <div class="card-header py-3 d-flex align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Petugas</h6>
            <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#exampleModal-1">+</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Nomer Telpon</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Nomer Telpon</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @forelse ($data as $index => $row)
                            <tr>
                                <td>{{ $index + $data->firstItem() }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->telp }}</td>
                                <td>{{ $row->level}}</td>
                                <td class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#show-{{ $row->id }}">
                                        <i class="fas fa-fw fa-eye"></i>
                                    </button>
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

    <!-- Modal Tambah-->
        <form action="{{ url('user') }}" method="post">
            @csrf
            <div class="modal fade" id="exampleModal-1" tabindex="-1" aria-labelledby="exampleModalLabel-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">Name : </label>
                                <input type="text" name="name" placeholder="Name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Username : </label>
                                <input type="text" name="username" placeholder="Username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Password : </label>
                                <input type="password" name="password" placeholder="Password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Confirm Password : </label>
                                <input type="password" class="form-control" id="exampleRepeatPassword" placeholder="Confirm Password" name="confirm_password">
                            </div>
                            <div class="form-group">
                                <label for="">Telepon : </label>
                                <input type="number" name="telp" placeholder="Telepon " class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Level : </label>
                                <select class="custom-select" id="inputGroupSelect02" name="level">
                                    <option selected>Select Level</option>
                                    <option value="petugas">Petugas</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    {{-- End Modal Tambah --}}

    {{-- Modal Show --}}
    @foreach ($data as $item)    
        <form method="GET">
            <div class="modal fade" id="show-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tanggaman</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">Name : </label>
                                <input type="text" name="name" placeholder="Name" class="form-control" value="{{ $item->name }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Username : </label>
                                <input type="text" name="username" placeholder="Username" class="form-control" value="{{ $item->name }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Password : </label>
                                <input type="password" name="password" placeholder="Password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Confirm Password : </label>
                                <input type="password" class="form-control" id="exampleRepeatPassword" placeholder="Confirm Password" name="confirm_password">
                            </div>
                            <div class="form-group">
                                <label for="">Telepon : </label>
                                <input type="number" name="telp" placeholder="Telepon " class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Level : </label>
                                <select class="custom-select" id="inputGroupSelect02" name="level">
                                    <option selected>Select Level</option>
                                    <option value="petugas">Petugas</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
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