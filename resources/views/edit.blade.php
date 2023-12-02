@extends('master')

@section('title', 'Data Pegawai')

@section('konten')

	<h3>Edit Pegawai</h3>

    @foreach($pegawai as $p)
    <form action="/pegawai/update" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>

        <div class="form-group row">
            <label for="Name" class="col-sm-1 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" required="required" name="nama" value="{{ $p->pegawai_nama }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="Jabatan" class="col-sm-1 col-form-label">Jabatan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="Umur" class="col-sm-1 col-form-label">Umur</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" required="required" name="umur" value="{{ $p->pegawai_umur }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="Alamat" class="col-sm-1 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea required="required" class="form-control" name="alamat">{{ $p->pegawai_alamat }}</textarea>
            </div>
        </div>
        <br>

        <a class="btn btn-success" href="/pegawai"> Kembali</a>
        <input class="btn btn-primary" type="submit" value="Simpan Data">
	</form>
    @endforeach
    <br/>
    <br/>

@endsection
