@extends('template.data0292')

@section('title', 'Data Dokter')

@section('tabel')
    <div class="container text-left">
        <div class="row">
            <div class="col">
                <a class="btn btn-primary" href="{{ url('dokter/create') }}" role="button">add+</a>
            </div>
        </div>
    </div>
    <br>
    <div class="container text-center">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nama</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Option</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($data as $dokter)
            <tr>
                <td>{{ $dokter->id }}</td>
                <td>{{ $dokter->nama }}</td>
                <td>{{ $dokter->jabatan }}</td>
                <td>
                <a class="btn btn-info " href="{{ url('dokter/'.$dokter->id) }}" role="button">Detail</a>
                <a class="btn btn-warning " href="{{ url('dokter/'.$dokter->id.'/edit') }}" role="button">Edit</a>
                <a class="btn btn-danger " href="{{ url('dokter/'.$dokter->id.'/delete') }}" role="button" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Delete</a>
                </td>

                

                
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection