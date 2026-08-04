@extends('layout1.eqoluentlayout')

@section('content')

<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-dark text-white">
            <h4 class="m-0">Add Student</h4>
        </div>
        <div class="card-body">

            <form action="{{route('eqoluent.store')}} "   method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="studentname" class="form-control" placeholder="Enter student name">
                </div>

                <div class="mb-3">
                    <label class="form-label">Age</label>
                    <input type="number" name='studentage' class="form-control" placeholder="Enter student age">
                </div>

                <div class="mb-3">
                    <label class="form-label">City</label>
                    <input type="text" name="studentcity" class="form-control" placeholder="Enter student city">
                </div>

                <div class="text-end">
                    <a href="{{ route('eqoluent.index') }}" class="btn btn-secondary btn-sm">Cancel</a>
                    <button type="submit" class="btn btn-success btn-sm">Save</button>
                </div>
            </form>

        </div>
    </div>
</div>

@endsection