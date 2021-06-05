@extends('template.main0292')

@section('title', 'Tambah Dokter')

@section('konten')
    <div class="container">
        <br>
        <h2>Tambah Dokter</h2>
        <br>
        @foreach ($data as $dokter)
            <form action="{{ url('dokter') }}">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="id" class="form-label">Id</label>
                    <input type="text" class="form-control" id="id" name="id">
                </div>
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
        @endforeach
    </div>
@endsection