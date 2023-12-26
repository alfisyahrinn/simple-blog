@extends('layouts.main')

@section('container')
    <ul>
        @foreach ($author as $item)
            <li>
                <a href="/author/{{ $item->name }}">
                    <h5>{{ $item->name }}</h5>
                </a>
            </li>
        @endforeach
    </ul>
@endsection
