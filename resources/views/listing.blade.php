@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="/listings" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
        </a>
        <a href="/listings/create" class="inline-block mr-5 float-right bg-black text-white py-2 px-5">
            Post Job</a>

        <div class="mx-4">

            <div class="bg-gray-50 border border-gray-200 p-10 rounded">

                <div class="flex flex-col items-center justify-center text-center">


                    <h3 class="text-2xl mb-2">{{ $listing->title }}</h3>
                    <div class="text-xl font-bold mb-4">{{ $listing->company }}</div>
                    @include('listing-tags', ['tagsCsv' => $listing->tags])
                    <div class="text-lg my-4">
                        <i class="fa-solid fa-location-dot"></i>{{ $listing->location }}
                    </div>


                    <div class="border border-gray-200 w-full mb-6"></div>
                    <div>
                        <h3 class="text-3xl font-bold mb-4">
                            Job Description
                        </h3>
                        <div class="text-lg space-y-6">
                            {{ $listing->description }}

                            <a href="mailto:{{ $listing->email }}"
                                class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"><i
                                    class="fa-solid fa-envelope"></i>
                                Contact Employer</a>

                            <a href="{{ $listing->website }}" target="_blank"
                                class="block bg-black text-white py-2 rounded-xl hover:opacity-80"><i
                                    class="fa-solid fa-globe"></i> Visit
                                Website</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="mt-2 bg-gray-50 border border-gray-200 p-1 rounded">
                <div class="mt-2 p-2 flex">
                    <a href="/listings/{{ $listing->id }}/edit">
                        <i class="fa-solid fa-pencil ml-1"></i>Edit
                    </a>
                </div>
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
