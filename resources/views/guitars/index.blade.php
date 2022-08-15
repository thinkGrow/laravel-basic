@extends('layout')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    
    @if(count($guitars)>0)
        @foreach($guitars as $guitar)
            <div>
                {{$guitar['name']}}
                <ul>
                    <li>
                        Made by:{{$guitar['brand']}}
                    </li>
                </ul>
            </div>
        @endforeach 

    @else
        <h2>There are no guitars to display</h2>
    @endif

    <div>
        User Input: {{$userInput}}
    </div>
</div>
@endsection