@extends('layouts.main')
@section('container')
    <article>
        <h2>{{$post['tittle']}}</h2>
        <h5>{{$post['author']}}</h5>
        <p>{{$post['body']}}</p>
        <a href = '/blog'> Back To Blog</a>
    </article>
@endsection
