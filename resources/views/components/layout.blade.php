<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-black text-white font-hanken-grotesk pb-20">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/home">
                    <img src="{{ Vite::asset('resources/images/logo.svg')}}" alt="">
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <x-nav-link href="/home" :active="request()->is('home')">Home</x-nav-link>  
                <x-nav-link href="/about" :active="request()->is('about')">About Us</x-nav-link>
                <x-nav-link href="/companies" :active="request()->is('companies')">Companies</x-nav-link>  
            </div>
            @auth
                <div class="space-x-6 font-bold flex">
                    <x-nav-link href="/jobs/create" :active="request()->is('jobs/create')">Post a Job</x-nav-link>  

                    <form method="POST" action="/logout">
                        @csrf
                        @method('DELETE')
                        <x-forms.button>Log Out</x-forms.button>
                    </form>
                </div>
            @endauth

            @guest
                <div class="space-x-6 font-bold">
                    <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link>  
                    <x-nav-link href="/login" :active="request()->is('login')">Login</x-nav-link>  

                </div>
            @endguest
            </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot}}
        </main>
    </div>
</body>
</html>