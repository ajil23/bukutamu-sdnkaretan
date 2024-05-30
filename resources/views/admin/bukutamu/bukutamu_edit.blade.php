@extends('admin.admin_master')
@section('admin')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800">Tambah Tamu</h1>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <form method="POST" action="{{route('bukutamu.update', $editdata->id)}}">
                    @csrf
                    <div class="row">
                        <div class="col">
                          <label for="nama">Nama Tamu</label>
                          <input type="text" class="form-control" placeholder="Nama Tamu" name="namatamu" value="{{$editdata->namatamu}}">
                        </div>
                        <div class="col">
                          <label for="jabatan">Jabatan Tamu</label>
                          <input type="text" class="form-control" placeholder="Jabatan Tamu" name="jabatantamu" value="{{$editdata->jabatantamu}}">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                          <label for="tanggal">Tanggal Berkunjung</label>
                          <input type="date" class="form-control" name="tanggal" value="{{$editdata->tanggal}}">
                        </div>
                        <div class="col">
                          <label for="tujuan">Tujuan</label>
                          <input type="text" class="form-control" placeholder="Maksud & Tujuan" name="tujuan" value="{{$editdata->tujuan}}">
                        </div>
                    </div>
                    <br>
                    <div>
                        <button type="submit" value="Submit" class="btn btn-success shadow">Simpan</button>
                        <button type="button" onclick="history.back()" class="btn btn-danger shadow">Batalkan</button>
                    </div>     
                </form>
            </div>
        </div>
    </div>
@endsection
