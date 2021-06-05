@extends('template.main0292')

@section('title', 'Tambah Dokter')

@section('konten')
    <div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <br>
            <h2 class="text-center">Tambah Dokter</h2>
            <br>
            <form action="{{ url('dokter') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>

                <div class="mb-3">
                    <label for="jabatan" class="form-label">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan" name="jabatan">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col"></div>
    </div>
            

    </div>
@endsection