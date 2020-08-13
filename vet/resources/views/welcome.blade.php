@extends('app')

@section('title')
{{
    "Welcome Page"
}}
@endsection

@section('welcome')
    <div class="container">
        <h1>Welcome to Vet Hosipital</h1>
        <h2>
            {{ $greeting }}
        </h2>
    </div>
@endsection

@section('body')
<p>
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus explicabo unde officiis alias voluptatibus aliquam voluptas vitae nulla pariatur eveniet, enim temporibus itaque culpa suscipit quod maxime illo distinctio odit!
</p>
@endsection