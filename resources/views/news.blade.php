@extends('layout.template')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10 mt-3"></div>
        @foreach ($post as $berita)
            <article class="mb-5">
                <h2>{{ $berita["title"] }}</h2>
                <h5>by : {{ $berita["penulis"] }}</h5>
                <p>{{ $berita["body"] }} <a href="/news/{{ $berita["title_lain"] }}">Read more ...</a></p>
            </article>
        @endforeach
    </div>
</div>
@endsection