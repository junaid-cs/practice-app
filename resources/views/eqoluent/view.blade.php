@extends('layout1.eqoluentlayout')

@section('content')

<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-dark text-white">
            <h4 class="m-0">Student Details</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered mb-0">
                <tr>
                    <th style="width: 200px;">Name</th>
                    <td>{{ $student->name }}</td>
                </tr>
                <tr>
                    <th>Age</th>
                    <td>{{ $student->age }}</td>
                </tr>
                <tr>
                    <th>City</th>
                    <td>{{ $student->city }}</td>
                </tr>
                <tr>
                    <th>Created At</th>
                    <td>{{ $student->created_at }}</td>
                </tr>
                <tr>
                    <th>Updated At</th>
                    <td>{{ $student->updated_at }}</td>
                </tr>
            </table>
        </div>
        <div class="card-footer text-end">
            <a href="{{ route('eqoluent.index') }}" class="btn btn-secondary btn-sm">Back</a>
        </div>
    </div>
</div>

@endsection
