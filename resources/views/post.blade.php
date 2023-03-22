
@extends('layout')

@section('content')

<article>
    <h1>{{ $post->title }}</h1>
    <p><i>{{ $post->excerpt }}</i></p>
    <p>{{ $post->body }}</p>
</article>
<x-button link="/" text="Go back" />

@endsection
