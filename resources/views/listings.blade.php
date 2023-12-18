@extends('layouts.app')
@section('content')
    @foreach ($listings as $listing)
        <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
            <div class="container">
                <div class="flex">
                    <img class="hidden w-48 mr-6 md:block" src="images/acme.png" alt="" />
                    <div>
                        <div class="text-lg mt-4">
                            <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
                        </div>
                    </div>
                </div>
                {{-- <h1>{{ $heading }}</h1> --}}

                @if (count($listings) == 0)
                    <p>No listing found</p>
                @endif


                <h2>
                    <a href="/listings/{{ $listing['id'] }}">
                        {{ $listing['title'] }}
                    </a>
                </h2>


                <p>{{ $listing['description'] }}</p>

            </div>
        </div>
    @endforeach
@endsection
{{-- https://www.youtube.com/watch?v=MYyJ4PuL4pY&ab_channel=TraversyMedia --}}
{{-- 1:15 --}}
