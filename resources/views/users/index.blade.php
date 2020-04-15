@extends('layouts.main')

@section('content')

    <div class="card">
        <div class="card-header">
            Laravel Excel Export
        </div>
        <div class="card-body">
            {{-- <h5 class="card-title">Special title treatment</h5> --}}
            {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
            <a class="btn btn-primary mb-1" href="{{ route('export') }}" role="button">Export to Excel</a>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name </th>
                        <th scope="col">Email</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Updated At</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($users  as $user)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>
                    </tr>
                @endforeach
            
                </tbody>
            </table>
        </div>
    </div>
    
    
@endsection