@extends('master') 
@section('section')

<h1>Our Team</h1>

<ul>
    @foreach ($persons as $item)

    <li><a href="{{ route('Nosotros',$item)}}">{{ $item }}</a></li>

    @endforeach
</ul>

@if(!empty($name)) @endif
@endsection