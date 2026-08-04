@extends('layout1.eqoluentlayout')

@section('content')

<a href="{{route('eqoluent.create')}}" class="btn btn-success btn-sm my-4">
    Add Student
</a>
@session('status')
<div class="alert alert-success">
    {{session('status')}}   
</div>
@endsession
<table class="table table-responsive table-striped">
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>City</th>
        <th>Action</th>
    </tr>
    @foreach ($students as $student)
         <tr>
        <td>{{$student->name}}</td>
        <td>{{$student->age}}</td>
        <td>{{$student->city}}</td>
        <td  class="d-flex gap-1"><a href="{{ route('eqoluent.show',$student->id)}}" class="btn btn-primary btn-sm">View</a>
        <a href="{{route('eqoluent.edit',$student->id)}}" class="btn btn-warning btn-sm">Edit</a>
        <form action="{{route('eqoluent.destroy',$student->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button href="" class="btn btn-danger btn-sm">Delete</button>
        </form>
        </td>
    </tr>
    @endforeach
   
</table>
{{$students->links('pagination::bootstrap-5')}}

@endsection