@extends('layouts.main')
@section('container')

    <div class="position-relative" style="height: 330px">
        <div class="bg-dark lastes">
            <img class="img-lastes" src="/image/azpi.jpg" alt="">
        </div>
        <form action="/posts">
            <div class="search-input input-group bg-transparent" style="height: 50px; width: 400px; border-radius: 13px ">
                @if (request('category'))
                    <input type="hidden" name="category" value={{ request('category') }}>
                @elseif(request('author'))
                    <input type="hidden" name="author" value={{ request('author') }}>
                @endif

                <input style="border: none;  background-color: rgb(240, 240, 240); border-radius: 13px 0 0 13px;"
                    type="text" class="form-control" name="search" placeholder="Search...">
                <button class="px-3"
                    style="border: none;  background-color:rgb(240, 240, 240);border-radius: 0 13px 13px 0"
                    type="submit"><img src="/image/search.svg" alt="cari"></button>
            </div>
        </form>
    </div>
    <div class="mt-3 d-flex justify-content-center gap-3">
        @if (!request('category'))
            <button class="btn-category-active">
                <a style="font-size: 15px ; text-decoration: none; color:white" href="/posts">
                    All
                </a>
            </button>
        @else
            <button class="btn-category">
                <a style="font-size: 15px ; text-decoration: none; color:black" href="/posts">
                    All
                </a>
            </button>
        @endif
        @foreach ($category as $key)
            @if (request('category') === $key->slug)
                <button class="btn-category-active">
                    <a style="font-size: 15px ; text-decoration: none ; color:white"
                        href="/posts?category={{ $key->slug }}">
                        {{ $key->name }}
                    </a>
                </button>
            @else
                <button class="btn-category">
                    <a style="font-size: 15px ; text-decoration: none; color:black"
                        href="/posts?category={{ $key->slug }}">
                        {{ $key->name }}
                    </a>
                </button>
            @endif
        @endforeach
    </div>



    @if ($posts->count())
        <div class="row mt-3 gap-4 justify-content-center">
            @foreach ($posts as $item)
                <div style="flex: 0 0 auto;width: 22%;" class=" p-3 card-posts overflow-hidden">
                    <img class="card-posts-img" src={{ $item->image }} alt="">
                    <div style="margin-bottom: 0" class="d-flex justify-content-between mt-2">
                        <a style="font-size: 11px ; color:gray; text-decoration: none"
                            href="/posts?author={{ $item->user->username }}">
                            {{ $item->user->name }}
                        </a>
                        <a style="font-size: 11px ; color:gray; text-decoration: none"
                            href="/posts?category={{ $item->category->slug }}">
                            {{ $item->category->name }}
                        </a>
                    </div>
                    <div class="text-card">
                        <h5 style="height: 73px ;overflow: hidden ; ">{{ $item->title }}</h5>
                        <p style="font-size: 12px;height: 55px ;overflow: hidden ; margin-bottom: 0">
                            {{ $item->excerpt }}</p>
                    </div>
                    <div style="margin-top: 8px" class="d-flex justify-content-between align-items-center ">
                        <p style="font-size: 11px; color: gray" class="my-auto">Update 3 mins ago</p>
                        <button class="button-card"><a style="text-decoration: none ;color:black"
                                href="/posts/{{ $item['slug'] }}">Show detail</a></button>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <h1 class="text-center">BLOG TIDAK ADA</h1>
    @endif
    <div class="mt-3 d-flex justify-content-end">{{ $posts->links() }}</div>
@endsection
