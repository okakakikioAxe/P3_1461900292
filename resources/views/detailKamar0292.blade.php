@extends('template.main0292')

@section('title', 'Detail Kamar')

@section('konten')
    @foreach ($data as $kamar)
    
    <div class="container">
        <h2 class="text-center">Detail Kamar</h2>
        <br>
        <div class="row">
            <div class="col">
                <h2>Id</h2>
            </div>
            <div class="col">
                <h2>: {{ $kamar->id }}</h2>
            </div>  
        </div>
        <br>
        <div class="row">
            <div class="col">
                <h2>Id Pasien</h2>
            </div>
            <div class="col">
                <h2>: {{ $kamar->id_pasien }}</h2>
            </div>  
        </div>
        <br>
        <div class="row">
            <div class="col">
                <h2>Id Dokter</h2>
            </div>
            <div class="col">
                <h2>: {{ $kamar->id_kamar }}</h2>
            </div>  
        </div>
    </div>
        
    @endforeach
@endsection