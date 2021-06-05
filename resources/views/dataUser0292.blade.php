@extends('template.data0292')

@section('title', 'Data Kamar')

@section('tabel')
    <div class="container text-left">
        <div class="row">
            <div class="col">
                <a class="btn btn-primary" href="{{ url('user/create') }}" role="button">add+</a>
            </div>
        </div>
    </div>
    <br>
    <div class="container text-center">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">nama</th>
                <th scope="col">username</th>
                <th scope="col">password</th>
                <th scope="col">Option</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($data as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->password }}</td>
                <td>
                    <a class="btn btn-info " href="{{ url('user/'.$user->id) }}" role="button">Detail</a>
                    <a class="btn btn-warning " href="{{ url('user/'.$user->id.'/edit') }}" role="button">Edit</a>
                    <a class="btn btn-danger " href="{{ url('user/'.$user->id.'/delete') }}" role="button" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection