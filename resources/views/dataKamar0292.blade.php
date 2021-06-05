@extends('template.data0292')

@section('title', 'Data Kamar')

@section('tabel')
    <div class="container text-center">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">id pasien</th>
                <th scope="col">id dokter</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($data as $kamar)
            <tr>
                <td>{{ $kamar->id }}</td>
                <td>{{ $kamar->id_pasien }}</td>
                <td>{{ $kamar->id_dokter }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection