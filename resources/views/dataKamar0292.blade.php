@extends('template.data0292')

@section('title', 'Data Kamar')

@section('tabel')
    <div class="container text-left">
        <div class="row">
            <div class="col">
                <a class="btn btn-primary" href="{{ url('kamar/create') }}" role="button">add+</a>
            </div>
            <div class="col">
                <div class="container">
                        
                        <form action="{{ url('kamar/filter') }}" method="post">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="masukkan id dokter" id="nama" name="nama">
                                    </div>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-primary">Filter</button>
                                </div>
                            </div>
                        </form>
                    
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container text-center">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">id pasien</th>
                <th scope="col">id dokter</th>
                <th scope="col">Option</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($data as $kamar)
            <tr>
                <td>{{ $kamar->id }}</td>
                <td>{{ $kamar->id_pasien }}</td>
                <td>{{ $kamar->id_dokter }}</td>
                <td>
                    <a class="btn btn-info " href="{{ url('kamar/'.$kamar->id) }}" role="button">Detail</a>
                    <a class="btn btn-warning " href="{{ url('kamar/'.$kamar->id.'/edit') }}" role="button">Edit</a>
                    <a class="btn btn-danger " href="{{ url('kamar/'.$kamar->id.'/delete') }}" role="button" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection