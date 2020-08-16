@extends('app')

@section('title')
    edit : {{$owner->first_name}}
@endsection

@section('card-head')
    Edit {{$owner->first_name}}
@endsection

@section('b')Edit @endsection

@section('body')
    @include('partials/form')
@endsection
