@extends('layout.template')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col mt-3">
                <article>
                    <h2>{{ $post['title'] }}</h2>
                    <h5>{{ $post['penulis'] }}</h5>
                    <p>{{ $post['body'] }}</p>
                </article>
                <a href="/news"><h3>Back to news list</h3></a>
            </div>
        </div>
    </div>
@endsection