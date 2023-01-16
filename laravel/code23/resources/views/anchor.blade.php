{{-- @extends('Team')

@section('title')
    Shaima 
@endsection


<h1> Anchor Page </h1> --}}

{{-- <a href="./"> Welcome </a> <br>
<a href="./contact"> Contact Us </a> <br>
<a href="./about"> About Us </a> --}}


{{ $title }} <br>

@foreach ($name as $names)

    {{ $names }} <br>

@endforeach
