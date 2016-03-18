@extends('app')

@section('content')
    <h1>About Me {{$first}}, {{$last}}</h1>

    {{--@if($first == 'Dan')--}}
    {{--<h1>Hi {{$last}}, {{$first}}</h1>--}}
    {{--@else--}}
    {{--<h1>Hi {{$first}}, {{$last}}</h1>--}}
    {{----}}
    {{--@endif    --}}


    @if(count($people))

        <h3>People I like</h3>
        <ul>
            @foreach($people as $person)
                <li>{{$person}} </li>
            @endforeach

        </ul>
    @endif
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
        sint occaecat
        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."


    </p>

@stop