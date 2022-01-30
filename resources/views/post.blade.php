@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        <h5>By <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> di <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
        {!! $post->content !!}
    </article>
    <a href="/posts">Back To Posts</a>
@endsection