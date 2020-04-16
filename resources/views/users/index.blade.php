@extends('layouts.main')

@section('content')

    <div class="card">
        <div class="card-header bg-white">
            Laravel Excel Export
        </div>
        <div class="card-body">
            <a class="btn btn-primary mb-1" href="{{ route('export') }}" role="button">Export to Excel</a>
            <a class="btn btn-primary mb-1" href="{{ route('export_view') }}" role="button">Export From View to Excel</a>
            <a class="btn btn-primary mb-1" href="{{ route('export_format', 'Csv') }}" role="button">Export CSV</a>
            <a class="btn btn-primary mb-1" href="{{ route('export_format', 'Html') }}" role="button">Export HTML</a>
            <a class="btn btn-primary mb-1" href="{{ route('export_format', 'Dompdf') }}" role="button">Export PDF</a>

            @include('users.table', $users)
        </div>
    </div>
    
    
@endsection