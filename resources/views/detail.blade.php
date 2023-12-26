@extends('layouts.main')
@section('container')
    <div class="container overflow-hidden ">
        <img class="detail-img" style="
        max-width: 100%;
        height: 500px;" src={{ $post->image }}
            alt="masdasdas">
        <h1>{{ $post->title }}</h1>
        <p>By
            <a href="/categories/{{ $post->user->name }}" class="text-success">
                {{ $post->user->name }}
            </a>
            |
            <a href="/categories/{{ $post->category->slug }}" class="text-primary">
                {{ $post->category->name }}
            </a>
        </p>
        <h5>{{ $post['author'] }}</h5>
        {!! $post->body !!}
        <a href="/posts"><button class="mt-4 btn btn-primary">Back</button></a>
    </div>
@endsection
