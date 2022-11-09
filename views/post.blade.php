@extends('layouts.master')
@section('title', 'Post')
@section('content')

<div class="containers">
    <article>
        <h2>{{ $post["judul"] }}</h2>
        <h6>{{ $post["author"] }}</h6>
        <p>{{ $post["body"] }}</p>
    </article>
    <a href="/">Back to Contents</a>
</div>



@endsection
