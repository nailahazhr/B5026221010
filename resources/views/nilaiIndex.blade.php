@extends('master')

@section('title', 'Nilai Kuliah')

@section('konten')

    <h3>Nilai Kuliah</h3>

    <a href="/nilaikuliah/tambah" class="btn btn-primary mt-3"> + Tambah Data </a>
    <br>
    <br/>
    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
            <th>Opsi</th>
        </tr>
        @foreach ($nilaikuliah as $n)
            <tr>
                <td>{{ $n->ID }}</td>
                <td>{{ $n->NRP }}</td>
                <td>{{ $n->NilaiAngka }}</td>
                <td>{{ $n->SKS }}</td>
                <td>{{ app('App\Http\Controllers\NilaiController')->konversiNilai($n->NilaiAngka) }}</td>
                <td>{{ $n->NilaiAngka * $n->SKS }}</td>
                <td  class="btn-group">
                    <a href="/nilaikuliah/hapus/{{ $n->ID }}" class="btn btn-danger mx-1 ">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
