
@extends('layout')

@section('content')

@foreach ($posts as $post)
    <article>
        <h1>{{ $post->title }}</h1>
        <p>
            <i>{{ $post->excerpt }}</i>
        </p>
        <x-button link="posts/{{ $post->id }}" text="Read more"/>
    </article>
@endforeach

@endsection
