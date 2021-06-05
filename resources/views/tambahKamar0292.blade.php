@extends('template.main0292')

@section('title', 'Tambah Kamar')

@section('konten')
    <div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <br>
            <h2 class="text-center">Tambah Kamar</h2>
            <br>
            <form action="{{ url('kamar') }}" method="post">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="pasien" class="form-label">Id Pasien</label>
                    <input type="text" class="form-control" id="pasien" name="pasien">
                </div>
                <div class="mb-3">
                    <label for="dokter" class="form-label">Id Dokter</label>
                    <input type="text" class="form-control" id="dokter" name="dokter">
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