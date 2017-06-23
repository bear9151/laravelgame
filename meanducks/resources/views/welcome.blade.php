@extends('layout')

@section('content')

    <div class="flex-center position-ref full-height">
        {{--@if (Route::has('login'))--}}
        {{--<div class="top-right links">--}}
        {{--@if (Auth::check())--}}
        {{--<a href="{{ url('/home') }}">Home</a>--}}
        {{--@else--}}
        {{--<a href="{{ url('/login') }}">Login</a>--}}
        {{--<a href="{{ url('/register') }}">Register</a>--}}
        {{--@endif--}}
        {{--</div>--}}
        {{--@endif--}}

        <div class="content">
            <div class="title m-b-md">
                <img src="https://lh3.googleusercontent.com/-xU_bVr_HwtQ/AAAAAAAAAAI/AAAAAAAAACE/zL5OcEsOrck/s640/photo.jpg" alt="Looks nice on the outside, mean on the inside.">
                <br>
                Mean Ducks
            </div>

            <div class="links">
                <a href="frenemies/create">Create a Frenemy Duck</a>
                <a href="/frenemies">See all the Ducks and Battle ReginaDuck</a>
            </div>
        </div>
    </div>

@stop