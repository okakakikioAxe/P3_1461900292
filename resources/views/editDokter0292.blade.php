@extends('template.main0292')

@section('title', 'Edit Dokter')

@section('konten')
    <div class="container">
        
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <h2 class="text-center">Edit Dokter</h2>
                <br>
                @foreach ($data as $dokter)
                    <form action="{{ url('dokter/'.$dokter->id) }}" method="post">
                        @csrf
                        @method('PUT')
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
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                @endforeach
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection