@extends('layout.template')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10 mt-3"></div>
        @foreach ($post as $berita)
            <article class="mb-5">
                <h2>
                    <a href="/news/{{ $berita["title_lain"] }}">{{ $berita["title"] }}</a>
                </h2>
                <h5>by : {{ $berita["penulis"] }}</h5>
            </article>
        @endforeach
    </div>
</div>
@endsection