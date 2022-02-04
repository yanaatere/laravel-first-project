@extends('layouts.main')
@section('container')
    <article>
        <h1 class="mb-5">{{$post->title }}</h1>

        {!! $post -> body !!}

        <a href='/posts'> Back To Blog</a>
    </article>
@endsection
