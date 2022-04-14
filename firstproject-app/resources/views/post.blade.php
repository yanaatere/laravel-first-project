@extends('layouts.main')
@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{$post->title }}</h1>

                <p> By. <a href="/authors/{{$post->author->username}}"
                           class="text-decoration-none">{{$post->author->name}}</a> in
                    <a href="/categories/{{$post->category->slug}}"
                       class="text-decoration-none">{{$post->category->name}}</a>
                </p>

                <img src="https://picsum.photos/seed/{{$post->category->name}}/1200/400/" alt="{{$post->category->name}}" class="img-fluid">

                <article class="my-3 fs-5">
                    {{--Berfungsi untuk menampilkan isi body sekaligus mengexcute script sql--}}
                    {!! $post -> body !!}
                </article>

                <a href='/posts' class="d-block mt-3"> Back To Blog</a>
            </div>
        </div>
    </div>
@endsection
