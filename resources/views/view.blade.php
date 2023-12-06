@extends('master')

@section('title', 'Data Pegawai')

@section('konten')

<style>
    .box {
        width: 300px;
        height: 400px;
        background-color: rgb(136, 213, 239);
        margin-top: 20px;
        border-radius: 10px;
    }
</style>

	<h3>Data Pegawai</h3>
    <br>
    <div class="row">
        <div class="col-5">
            <div class="box mx-auto">
            </div>
        </div>

        <div class="col-7 d-flex">
            @foreach($pegawai as $p)
            <form action="/pegawai/update" method="post" class="form-horizontal w-100 my-auto">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $p->pegawai_id }}"><br/>

                <div class="form-group row">
                    <label for="Name" class="col-sm-2 col-form-label"><b>Nama</b></label>
                    <label for="Name" class="col-sm-1 col-form-label"><b>:</b></label>
                    <label class="col-sm-9 col-form-label" name="nama">{{ $p->pegawai_nama }}</label>
                </div>

                <div class="form-group row">
                    <label for="Jabatan" class="col-sm-2 col-form-label"><b>Jabatan</b></label>
                    <label for="Name" class="col-sm-1 col-form-label"><b>:</b></label>
                    <label class="col-sm-9 col-form-label" name="jabatan">{{ $p->pegawai_jabatan }}</label>
                </div>

                <div class="form-group row">
                    <label for="Umur" class="col-sm-2 col-form-label"><b>Umur</b></label>
                    <label for="Name" class="col-sm-1 col-form-label"><b>:</b></label>
                    <label class="col-sm-9 col-form-label" name="umur">{{ $p->pegawai_umur }}</label>
                </div>

                <div class="form-group row">
                    <label for="Alamat" class="col-sm-2 col-form-label"><b>Alamat</b></label>
                    <label for="Name" class="col-sm-1 col-form-label"><b>:</b></label>
                    <label class="col-sm-9 col-form-label" name="alamat">{{ $p->pegawai_alamat }}</label>
                </div>
                <br>

                <div>
                    <a class="btn btn-primary px-5" href="/pegawai">OK</a>
                </div>

            </form>
            @endforeach
        </div>
    </div>

    <br/>
    <br/>

@endsection
