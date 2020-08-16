@extends('app')
@section('title')
{{
    $owner->first_name
}}
@endsection



@section('welcome')
    <div class="card text-center">
        <div class="card-header">
            <h1>
                Owner Profile
            </h1>
        </div>
        <div class="card-body">
            <h5 class="card-title">
                {{$owner->first_name}}
            </h5>
            <div class="card-body justify-content-center">
                <p class="card-text">
                    {{$owner->first_name}} {{$owner->last_name}}, {{$owner->address_1}}@if($owner->address_2) {{$owner->address_2}}@endif, {{$owner->town}} {{$owner->city}} {{$owner->postcode}}
                </p>
                <p>
                    <a href="{{$owner->email}}">{{$owner->email}}</a>, {{$owner->telephone}}
                </p class="card-text">
            </div>
        <a href="http://www.homestead.test/owners/{{$owner->id}}/edit" class="btn btn-primary">Edit Details</a>
        </div>
    </div>
@endsection

