@extends('template.data0292')

@section('title', 'Data Pasien')

@section('tabel')
    <div class="container text-left">
        <div class="row">
            <div class="col">
                <a class="btn btn-primary" href="{{ url('pasien/create') }}" role="button">add+</a>
            </div>
            <div class="col">
                <div class="container">
                        
                        <form action="{{ url('pasien/filter') }}" method="post">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="masukkan alamat pasien" id="nama" name="nama">
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
                <th scope="col">nama pasien</th>
                <th scope="col">alamat pasien</th>
                <th scope="col">Option</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($data as $pasien)
            <tr>
                <td>{{ $pasien->id }}</td>
                <td>{{ $pasien->nama }}</td>
                <td>{{ $pasien->alamat }}</td>
                <td>
                    <a class="btn btn-info " href="{{ url('pasien/'.$pasien->id) }}" role="button">Detail</a>
                    <a class="btn btn-warning " href="{{ url('pasien/'.$pasien->id.'/edit') }}" role="button">Edit</a>
                    <a class="btn btn-danger " href="{{ url('pasien/'.$pasien->id.'/delete') }}" role="button" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection