@extends('template.main0292')

@section('konten')
<div class="container">
    <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
        Pilih Data   
    </button>
    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
        <li><a class="dropdown-item" href="{{ url('dokter') }}">Dokter</a></li>
        <li><a class="dropdown-item" href="#">Pasien</a></li>
        <li><a class="dropdown-item" href="{{ url('kamar') }}">Kamar</a></li>
        <li><a class="dropdown-item" href="#">User</a></li>
    </ul>
    </div>
</div>
<br>
@yield('tabel')
@endsection
