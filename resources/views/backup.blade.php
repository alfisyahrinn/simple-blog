  <div class="mt-3 d-flex justify-content-center gap-3">
    @foreach ($category as $key)
        {{-- @dd($key) --}}
        <button class="btn-category">
            <a style="font-size: 15px ; text-decoration: none" href="">
                {{ $key->name }}
            </a>
        </button>
    @endforeach
  </div>

