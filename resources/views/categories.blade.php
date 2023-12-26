@extends('layouts.main')

@section('container')
    <ul>
        @foreach ($category as $item)
            <li><a href="/categories/{{ $item->slug }}">
                    <h5>{{ $item->name }}</h5>
                </a></li>
        @endforeach
    </ul>
@endsection
