@extends('template.main0292')

@section('title', 'Edit Pasien')

@section('konten')
    <div class="container">
        @foreach ($data as $pasien)
            <form action="{{ url('pasien/'.$pasien->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="id" class="form-label">Id</label>
                    <input type="text" class="form-control" id="id" name="id" value="{{ $pasien->id }}"  disabled>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>

                <div class="mb-3">
                    <label for="jabatan" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        @endforeach
    </div>
@endsection