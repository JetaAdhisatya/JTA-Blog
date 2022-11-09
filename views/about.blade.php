@extends('layouts.master')
@section('title', 'About')
@section('content')

<div class="container">
    <div class="header">
        <h1 class="mywebsite">About Me</h1>

    </div>

    <div class="image-thanos"></div>

    <div class="konten">
        <h3>{{ $name }}</h3>
        <p>{{ $email }}</p>
        <p>{{ $linkedin }}</p>

    </div>
    <div class="footer">
        <p class="copyright">
            Copyright 2022.JetaAdhisatya
        </p>
    </div>
</div>

@endsection
