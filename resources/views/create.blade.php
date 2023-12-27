@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="/listings" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
        </a>
        @include('partials._search')



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

@include('partials._footer2')
