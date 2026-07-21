<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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