{{-- @extends('Team')


<h1> About Us</h1>

    @section('title')
        Isra'a
    @endsection




    @section('content')
    @parent <h1> Parent </h1>
    @endsection --}}

    {{ $title }} <br>

@foreach ($name as $names)

    {{ $names }} <br>

@endforeach