@extends('template.main0292')

@section('title', 'Edit Pasien')

@section('konten')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <h2 class="text-center">Edit Pasien</h2>
                <br>
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