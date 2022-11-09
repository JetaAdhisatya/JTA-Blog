@extends('layouts.master')
@section('title', 'Home')
@section('content')

<div class="container">
    <div class="header">
        <h1 class="mywebsite">My Website</h1>
    </div>

    <div class="image-hero"></div>

    <div class="konten">
        <h2>Judul Artikel</h2>
            <p class="penulis">
                Ditulis Oleh <a href="#">Jeta</a> Pada 10 Maret 2021
            </p>
            @foreach ($posts as $post)
                <article class="mb-5">
                    <h2>
                        <a href="/{{ $post["slug"] }}">{{ $post["judul"] }}</a>
                    </h2>
                    <h6>Director: {{ $post ["author"] }}</h6>
                    <p>{{ $post["body"] }}</p>
                </article>
            @endforeach
    </div>
    <div class="footer">
        <p class="copyright">
            Copyright 2022.JetaAdhisatya
        </p>
    </div>
</div>

@endsection

