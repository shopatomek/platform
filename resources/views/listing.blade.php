@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>{{ $listing['title'] }}</h2>
        <p>
            {{ $listing['description'] }}
        </p>
    </div>
@endsection
