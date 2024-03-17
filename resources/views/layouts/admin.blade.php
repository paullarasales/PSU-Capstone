<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="shortcut icon" href="{{ asset('images/psu.png') }}">


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,500;1,600&family=Rubik+Broken+Fax&display=swap" rel="stylesheet">

    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>

    <!-- Scripts -->
    <script {{ asset('js/app.js') }} defer></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-poppins antialiased">
    <div class="relative min-h-screen md:flex" x-data="{ open: true }">
        <!-- Sidebar -->
            <aside :class="{ '-translate-x-full': !open }" class="z-10 bg-blue-800 text-blue-100 w-64 px-2 py-4 absolute inset-y-0 left-0 md:relative transform md:translate-x-0 transition ease-in-out duration-200 shadow-lg">
                <!-- Logo -->
                <div class="flex items-center justify-between px-2 py-4">
                    <div class="flex items-center space-x-2">
                        <a href="">
                            <x-application-logo class="block h-9 w-auto fill-current text-blue-100" />
                        </a>
                        <span class="text-2xl font-extrabold">Admin</span>
                    </div>
                    <button type="button" @click="open = !open" class="md:hidden inline-flex p-2 items-center justify-center rounded-md text-blue-100 hover:bg-blue-700 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="block w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <nav>
                    
                </nav>
            </aside>
        <!-- Main -->
        <main>
            <nav class="bg-blue-900 shadow-lg">
                <div class="mx-auto px-2 sm:px-6 lg:px-8">
                    <div class="relative flex items-center justify-evenly md:justify-end h-16">
                        <div class="absolute inset-y-0  left-0 flex items-center md:hidden">
                            <button type="button" @click="open = !open" @click.away="open = false" class="inline-flex items-center justify-center p-2 rounded-md text-blue-100 hover:bg-blue-700 focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"  stroke-width="1.5" stroke="currentColor" class="block w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>  
                            </button>
                        </div>
                    </div>
                </div>
            </nav>  
            <div>
                {{ $slot }}
            </div>
        </main>
    </div>
</body>
</html>