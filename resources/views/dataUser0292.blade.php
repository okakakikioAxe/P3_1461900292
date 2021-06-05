@extends('template.data0292')

@section('title', 'Data Kamar')

@section('tabel')
    <div class="container text-center">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">nama</th>
                <th scope="col">username</th>
                <th scope="col">password</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($data as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->password }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection