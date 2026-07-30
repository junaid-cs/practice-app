@extends('layout1.mainlayout')
@section('content')
    <h1>This is contact page from the view</h1>
   <p>this is the id</p>
   <a href="{{route('addstudent')}}" class="btn btn-success mb-2">Add User</a>
   <table class="table table-striped">
        <tr>
            <th>Name</th>
            <th>age</th>
            <th>city</th>
            <th>Action</th>
        </tr>
       @foreach($students as $student)
       <tr>
           <td>{{$student->name}}</td>
           <td>{{$student->age}}</td>
           <td>{{$student->city}}</td>
           <td>
            {{-- <a href="{{route('view.student_detail',$student->id)}}" class="btn btn-primary btn-sm">view</a> --}}
           <a href="{{route('delete.student',$student->id)}}" class="btn btn-danger btn-sm">delete</a>
           <a href="{{route('update.student',$student->id)}}" class="btn btn-warning btn-sm">Update</a>
        </td>
        </tr>
        @endforeach 
    </table>
    <div class="mt-5">
        {{$students->links('pagination::bootstrap-5')}}
    </div>
@endsection