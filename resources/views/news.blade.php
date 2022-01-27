@extends('layout.template')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10 mt-5"></div>
        @foreach ($post as $berita)
            <article class="mb-3">
                <h2>{{ $berita->title }}</h2>
                <p>{{ $berita->potongan }} <a href="/news/{{ $berita->id }}">Read more ...</a></p>
            </article>
        @endforeach
    </div>
</div>
@endsection