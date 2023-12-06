@extends('master')

@section('title', 'Laptop')

@section('konten')

	<h3>Edit Data Laptop</h3>

    @foreach($laptop as $p)
    <form action="/laptop/update" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->kodelaptop }}"> <br/>

        <div class="form-group row">
            <label for="Merk" class="col-sm-2 col-form-label">Merk Laptop</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" required="required" name="Merk" value="{{ $p->merklaptop }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="Stok" class="col-sm-2 col-form-label">Stok Laptop</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" required="required" name="Stok" value="{{ $p->stocklaptop }}">
            </div>
        </div>

        <br>

        <a class="btn btn-secondary" href="/pegawai">Kembali</a>
        <input class="btn btn-primary" type="submit" value="Simpan Data">
	</form>
    @endforeach
    <br/>
    <br/>

@endsection
