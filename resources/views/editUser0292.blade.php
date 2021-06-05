@extends('template.main0292')

@section('title', 'Edit User')

@section('konten')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <h2 class="text-center">Edit User</h2>
                <br>
                @foreach ($data as $user)
                    <form action="{{ url('user/'.$user->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="id" class="form-label">Id</label>
                            <input type="text" class="form-control" id="id" name="id" value="{{ $user->id }}"  disabled>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Password Lama</label>
                            <input type="password" class="form-control" id="pw1" name="pw1">
                        </div>
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Password Baru</label>
                            <input type="password" class="form-control" id="pw2" name="pw2">
                        </div>
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Ketik Ulang Password Baru</label>
                            <input type="password" class="form-control" id="pw3" name="pw3">
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