@extends('template.main0292')

@section('title', 'Detail User')

@section('konten')
    @foreach ($data as $user)
    
    <div class="container">
        <h2 class="text-center">Detail User</h2>
        <br>
        <div class="row">
            <div class="col">
                <h2>Id</h2>
            </div>
            <div class="col">
                <h2>: {{ $user->id }}</h2>
            </div>  
        </div>
        <br>
        <div class="row">
            <div class="col">
                <h2>Nama</h2>
            </div>
            <div class="col">
                <h2>: {{ $user->nama }}</h2>
            </div>  
        </div>
        <br>
        <div class="row">
            <div class="col">
                <h2>Username</h2>
            </div>
            <div class="col">
                <h2>: {{ $user->username }}</h2>
            </div>  
        </div>
        <br>
        <div class="row">
            <div class="col">
                <h2>Password</h2>
            </div>
            <div class="col">
                <h2>: {{ $user->password }}</h2>
            </div>  
        </div>
    </div>
        
    @endforeach
@endsection