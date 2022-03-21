@extends('layouts.main')
@section('container')
    <article>
        <h1 class="mb-5">{{$post->title }}</h1>

        <p> By. <a href="#" class="text-decoration-none">{{$post->user->name}}</a> in
            <a href="/categories/{{$post->category->slug}}" class="text-decoration-none">{{$post->category->name}}</a>
        </p>

        {{--Berfungsi untuk menampilkan isi body sekaligus mengexcute script sql--}}
        {!! $post -> body !!}

        <a href='/posts' class="d-block mt-3"> Back To Blog</a>
    </article>
@endsection
