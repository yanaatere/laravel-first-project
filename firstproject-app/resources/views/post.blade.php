@extends('layouts.main')
@section('container')
    <article>
        <h1 class="mb-5">{{$post->title }}</h1>

        <p> By. Yana Andika in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a> </p>

        {{--Berfungsi untuk menampilkan isi body sekaligus mengexcute script sql--}}
        {!! $post -> body !!}

        <a href='/posts'> Back To Blog</a>
    </article>
@endsection
