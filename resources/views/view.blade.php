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
    <div class="row">
        <div class="col-4">
            <div class="box mx-auto">
            </div>
        </div>

        <div class="col-8 d-flex">
            @foreach($pegawai as $p)
            <form action="/pegawai/update" method="post" class="form-horizontal w-100 my-auto">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>

                <div class="form-group row">
                    <label for="Name" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <div class="form-label" name="nama">{{ $p->pegawai_nama }}</div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                        <div class="form-label" name="jabatan">{{ $p->pegawai_jabatan }}</div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Umur" class="col-sm-2 col-form-label">Umur</label>
                    <div class="col-sm-10">
                        <div class="form-label" name="umur">{{ $p->pegawai_umur }}</div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <div class="form-label" name="alamat">{{ $p->pegawai_alamat }} </div>
                    </div>
                </div>
                <br>

                <div class="text-center">
                    <a class="btn btn-primary px-5" href="/pegawai">OK</a>
                </div>

            </form>
            @endforeach
        </div>
    </div>

    <br/>
    <br/>

@endsection
