@extends('template.main0292')

@section('title', 'Tambah User')

@section('konten')
    <div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <br>
            <h2 class="text-center">Tambah User</h2>
            <br>
            <form action="{{ url('user') }}" method="post">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="mb-3">
                    <label for="pw1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="pw1" name="pw1">
                </div>
                <div class="mb-3">
                    <label for="pw2" class="form-label">Ketik Ulang Password</label>
                    <input type="password" class="form-control" id="pw2" name="pw2">
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