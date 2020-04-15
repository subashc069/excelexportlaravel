@extends('layouts.main')

@section('content')
    <a class="btn btn-primary mb-1" href="#" role="button">Export to Excel</a>
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name </th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($users  as $user)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
            </tr>
        @endforeach
            
        </tbody>
    </table>
@endsection