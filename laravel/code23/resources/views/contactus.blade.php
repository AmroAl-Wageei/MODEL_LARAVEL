{{-- @extends('Team')


@section('title')
    Bara'a
@endsection

<h1> Contact Us Page </h1> --}}

{{ $title }} <br>
<ul> 
@foreach ($name as $names)

    {{ $names }} <br>

@endforeach
</ul>

