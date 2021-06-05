@extends('template.data0292')

@section('title', 'Data Dokter')

@section('tabel')
    <div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">nama</th>
                <th scope="col">jabatan</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($data as $dokter)
            <tr>
                <td>{{ $dokter->id }}</td>
                <td>{{ $dokter->nama }}</td>
                <td>{{ $dokter->jabatan }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection