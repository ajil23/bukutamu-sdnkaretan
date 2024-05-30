@extends('admin.admin_master')
@section('admin')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800">Daftar Tamu</h1>
            </div>
            <a href="{{route('bukutamu.export')}}" class="btn btn-link">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary">
                        <i class="fas fa-solid fa-print"></i>
                    </button>
                    <button type="button" class="btn btn-primary">Export Excel</button>
                </div>
            </a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tabel Daftar Tamu</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th><center>No</center></th>
                                <th><center>Nama</center></th>
                                <th><center>Jabatan</center></th>
                                <th><center>Tujuan</center></th>
                                <th><center>Tanggal</center> </th>
                                <th><center>Aksi</center> </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datatamu as $item)
                            <tr>
                                <td><center>{{$loop->iteration}}</center></td>
                                <td><center>{{$item->namatamu}}</center></td>
                                <td><center>{{$item->jabatantamu}}</center></td>
                                <td><center>{{$item->tujuan}}</center></td>
                                <td><center>{{date('d-m-Y', strtotime($item->tanggal));}}</center></td>
                                <td colspan="2">
                                    <center>
                                        <a href="{{route('bukutamu.edit', $item->id)}}" class="btn btn-link">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-warning">
                                                    <i class="fas fa-solid fa-pen"></i>
                                                </button>
                                                <button type="button" class="btn btn-warning">Edit Data</button>
                                            </div>
                                        </a>
                                        <a href="{{route('bukutamu.delete', $item->id)}}" class="btn btn-link">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-danger">
                                                    <i class="fas fa-solid fa-trash"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger">Hapus Data</button>
                                            </div>
                                        </a>
                                    </center>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$datatamu->links('pagination::bootstrap-5')}}
                </div>
            </div>
        </div>
    </div>
@endsection
