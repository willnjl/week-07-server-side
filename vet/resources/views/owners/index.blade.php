@extends('app')

@section('title')
{{
    "Welcome Page"
}}
@endsection

@section('welcome')
    <div class="container">
        <h1>Welcome to Vet Hosipital</h1>
    </div>
@endsection

@section('body')
    @if(count($owners) > 0)
        <ul class="list-group">
            @foreach($owners as $person)
                <li class="list-group-item">
                {{ $person->last_name}}, {{ $person->first_name }}
                </li>
            @endforeach
        </ul>
    @else
        <p>
            Sorry No Owners Found
        </p>
    
    @endif
@endsection