@extends('template.main0292')

@section('title', 'Detail Dokter')

@section('konten')
    @foreach ($data as $dokter)
    
    <div class="container">
        <h2 class="text-center">Detail Dokter</h2>
        <br>
        <div class="row">
            <div class="col">
                <h2>Id</h2>
            </div>
            <div class="col">
                <h2>: {{ $dokter->id }}</h2>
            </div>  
        </div>
        <br>
        <div class="row">
            <div class="col">
                <h2>Nama</h2>
            </div>
            <div class="col">
                <h2>: {{ $dokter->nama }}</h2>
            </div>  
        </div>
        <br>
        <div class="row">
            <div class="col">
                <h2>Jabatan</h2>
            </div>
            <div class="col">
                <h2>: {{ $dokter->jabatan }}</h2>
            </div>  
        </div>
    </div>
        
    @endforeach
@endsection