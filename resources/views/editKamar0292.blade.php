@extends('template.main0292')

@section('title', 'Edit Kamar')

@section('konten')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <h2 class="text-center">Edit Kamar</h2>
                <br>
                @foreach ($data as $kamar)
                    <form action="{{ url('kamar/'.$kamar->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="id" class="form-label">Id</label>
                            <input type="text" class="form-control" id="id" name="id" value="{{ $kamar->id }}"  disabled>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Id Pasien</label>
                            <input type="text" class="form-control" id="pasien" name="pasien">
                        </div>

                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Id Dokter</label>
                            <input type="text" class="form-control" id="dokter" name="dokter">
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