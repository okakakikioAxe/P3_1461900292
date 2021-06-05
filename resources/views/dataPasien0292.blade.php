@extends('template.data0292')

@section('title', 'Data Kamar')

@section('tabel')
    <div class="container text-left">
        <div class="row">
            <div class="col">
                <a class="btn btn-primary" href="{{ url('pasien/create') }}" role="button">add+</a>
            </div>
        </div>
    </div>
    <br>
    <div class="container text-center">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">nama pasien</th>
                <th scope="col">alamat pasien</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($data as $pasien)
            <tr>
                <td>{{ $pasien->id }}</td>
                <td>{{ $pasien->nama }}</td>
                <td>{{ $pasien->alamat }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection