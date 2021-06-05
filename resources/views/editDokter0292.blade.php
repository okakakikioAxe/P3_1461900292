@extends('template.main0292')

@section('title', 'Edit Dokter')

@section('konten')
    <div class="container">
        @foreach ($data as $dokter)
            <form action="{{ url('dokter/'.$dokter->id.'/update') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="id" class="form-label">Id</label>
                    <input type="text" class="form-control" id="id" name="id" value="{{ $dokter->id }}"  disabled>
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