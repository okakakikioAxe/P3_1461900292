@extends('template.main0292')

@section('title', 'Tambah Pasien')

@section('konten')
    <div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <br>
            <h2 class="text-center">Tambah Pasien</h2>
            <br>
            <form action="{{ url('pasien') }}" method="post">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Pasien</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat Pasien</label>
                    <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
                
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                
            </form>
        </div>
        <div class="col"></div>
    </div>
            

    </div>
@endsection