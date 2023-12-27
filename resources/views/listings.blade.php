@extends('layouts.app')
@section('content')
    <div class="container">
        @include('partials._register')
        @include('partials._hero')
        @include('partials._search')


        @foreach ($listings as $listing)
            <div class="bg-gray-50 border border-gray-200 rounded p-6">
                <div>
                    <h2>
                        <a href="/listings/{{ $listing['id'] }}">
                            {{ $listing['title'] }}
                        </a>
                    </h2>
                </div>
                <div class="text-xl font-bold mb-4">{{ $listing->company }}</div>
                @include('listing-tags', ['tagsCsv' => $listing->tags])
                </ul>
                <div class="text-lg mt-4">
                    <i class="fa-solid fa-location-dot"></i>
                    {{ $listing->location }}
                </div>

            </div>

            @if (count($listings) == 0)
                <p>No listing found</p>
            @endif
        @endforeach
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#ef3b2d",
                    },
                },
            },
        };
    </script>
@endsection

@include('partials._footer')
