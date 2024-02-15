@extends('layout/master')

@section('content')
     @include("fragment.subview")

     @foreach ($posts as $p)
        <p>{{ $name }}</p>

        <p>{{ $p }}</p>
     @endforeach
@endsection
