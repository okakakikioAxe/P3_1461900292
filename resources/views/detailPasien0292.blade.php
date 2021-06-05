@extends('template.main0292')

@section('title', 'Detail Pasien')

@section('konten')
    @foreach ($data as $pasien)
    
    <div class="container">
        <h2 class="text-center">Detail Pasien</h2>
        <br>
        <div class="row">
            <div class="col">
                <h2>Id</h2>
            </div>
            <div class="col">
                <h2>: {{ $pasien->id }}</h2>
            </div>  
        </div>
        <br>
        <div class="row">
            <div class="col">
                <h2>Nama</h2>
            </div>
            <div class="col">
                <h2>: {{ $pasien->nama }}</h2>
            </div>  
        </div>
        <br>
        <div class="row">
            <div class="col">
                <h2>Alamat</h2>
            </div>
            <div class="col">
                <h2>: {{ $pasien->alamat }}</h2>
            </div>  
        </div>
    </div>
        
    @endforeach
@endsection