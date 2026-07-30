<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        @foreach($users as $user)
      <th scope="row">{{$user->id}}</th>
      <td> {{$user->name}}</td>
      <td>{{$user->email}}</td>
    </tr>
     @endforeach
  </tbody>
</table>

    
           
        
       
    This is Home page
        <a href="{{route("about")}}">About</a>
        <a href="{{route('contact',['id'=>'movies'])}}">contact</a>
        @php
        $a = ['apple','ball','cat'];   
        @endphp
       
       {{-- hi this is comment --}}
        @if (false)
            <h1>Hi if is working</h1>
            @else
            <h2>Else is working</h2>
        @endif
        @php
        $color = 'yellow';
        @endphp

        @switch($color)
            @case('red')
                    <h2>this is red color</h2>
                @break
                @case('green')
                    <h2>this is green color</h2>
                @break
                @case('yellow')
                <h3>this is yellow color</h3>
                @break
            @default
            <h4>this is default color</h4>
        @endswitch
        
    @isset($color)
    <h3>the isset is working</h3>
    @endisset
        @foreach ($a as $key => $item)
            {{$key}}  {{$item}} |
        @endforeach
    @include('layout1.mainlayout')
</body>
</html>