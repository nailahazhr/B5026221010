@extends('master')

@section('title', 'Laptop')

@section('konten')

    <h3>Laptop</h3>

    <a href="/laptop/tambah" class="btn btn-primary mt-3"> + Tambah Data Laptop Baru</a>

    <br>
    <p class="mt-4">Cari Merk Laptop:</p>
	<form action="/laptop/cari" method="GET" class="d-flex">
        <input class="form-control mr-2" type="text" name="cari" placeholder="Cari Merk Laptop .." value="{{ old("cari", isset($cari) ? $cari : '') }}">
        <input class="btn btn-primary my-2 my-sm-0" type="submit" value="CARI">
    </form>
    <br/>

    <table class="table table-striped table-hover text-center">
        <tr>
            <th>Kode Laptop</th>
            <th>Merk Laptop</th>
            <th>Stok Laptop</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach ($laptop as $p)
            <tr>
                <td>{{ $p->kodelaptop }}</td>
                <td>{{ $p->merklaptop }}</td>
                <td>{{ $p->stocklaptop }}</td>
                {{-- <td>{{ $p->tersedia }}</td> --}}
                <td class="align-middle">
                    <input type="checkbox" disabled {{ $p->tersedia == '1' ? 'checked' : '' }}>
                </td>
                <td>
                    {{-- <a href="/laptop/view/{{ $p->kodelaptop }}" class="btn btn-info ">View</a> --}}
                    <a href="/laptop/edit/{{ $p->kodelaptop }}" class="btn btn-info ">Edit</a>
                    <a href="/laptop/hapus/{{ $p->kodelaptop }}" class="btn btn-danger ">Delete</a>
                </td>
            </tr>

        @endforeach
    </table>
    {{-- {{ $pegawai->links() }} --}}
@endsection
