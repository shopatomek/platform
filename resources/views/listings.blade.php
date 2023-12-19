@extends('layouts.app')
@section('content')
    <div class="container">

        <!-- Dodawanie biblioteki Font Awesome 5 -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />


        <section class="relative h-72 bg-laravel flex flex-col justify-center align-center text-center space-y-4 mb-4">
            <div class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
                style="background-image: url('images/logo.png')"></div>

            <div class="z-10">
                <h1 class="text-6xl font-bold uppercase text-white">
                    Lara<span class="text-black">Laravel Job Offers</span>
                </h1>
                <p class="text-2xl text-gray-200 font-bold my-4">
                    Find or post Laravel jobs & projects
                </p>
                <div>
                    <a href="register.html"
                        class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black">Sign
                        Up to List a Gig</a>
                </div>
            </div>
        </section>

        <nav class=" flex mr-4 justify-between items-center mb-4">
            <div>
                <a href="register.html" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i>
                    Register</a>
            </div>
            <br>
            <div>
                <a href="login.html" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                    Login</a>
            </div>

        </nav>

        <form action="">
            <div class="relative border-2 border-gray-100 rounded-lg mb-4">
                <div class="absolute top-4 left-3">
                    <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
                </div>
                <input type="text" name="search"
                    class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
                    placeholder="Search Laravel Gigs..." />
                <div class="absolute top-2 right-2">
                    <button type="submit" class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600">
                        Search
                    </button>
                </div>
            </div>
        </form>


        @foreach ($listings as $listing)
            <div class="bg-gray-50 border border-gray-200 rounded p-6">
                <div>
                    <h2>
                        <a href="/listings/{{ $listing['id'] }}">
                            {{ $listing['title'] }}
                        </a>
                    </h2>
                    <div class="text-xl font-bold mb-4">{{ $listing->company }}</div>
                    <ul class="flex">
                        <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                            <a href="#">Laravel</a>
                        </li>
                        <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                            <a href="#">API</a>
                        </li>
                        <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                            <a href="#">Backend</a>
                        </li>
                        <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                            <a href="#">Vue</a>
                        </li>
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
    </div>
@endsection


<footer
    class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">
    <p class="ml-2">Copyright &copy; 2024, All Rights reserved</p>

    <a href="create.html" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">Post Job</a>
</footer>

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
