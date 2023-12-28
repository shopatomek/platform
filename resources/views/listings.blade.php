@extends('layouts.app')
@section('content')
    <div class="container">
        {{-- @include('partials._register') --}}
        <a href="/home" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
        </a>
        <a href="/listings/create" class="inline-block mr-5 float-right bg-black text-white py-2 px-5">
            Post Job</a>
        @include('partials._hero')
        @include('partials._search')


        @foreach ($listings as $listing)
            <div class="m-4">

                <div class="bg-gray-50 border border-gray-200 rounded p-6">

                    <div>
                        <img class=" hidden w-10 mr-6 md:block"
                            src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.png') }}"
                            alt="" />
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
            </div>


            @if (count($listings) == 0)
                <p>No listing found</p>
            @endif
        @endforeach
        <div class="mt-6 p-4">
            {{ $listings->links() }}
        </div>
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
