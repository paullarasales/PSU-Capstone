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
            <aside :class="{ '-translate-x-full': !open }" class="z-10 bg-gray-100 text-black w-64 px-2 py-4 absolute inset-y-0 left-0 md:relative transform md:translate-x-0 transition ease-in-out duration-200">
                <!-- Logo -->
                <div class="flex items-center justify-between px-2 py-4">
                    <div class="flex flex-col items-center space-y-2 w-full">
                        <header>
                            <a href="#your-link-here" class="text-center">
                                <h1 class="text-4xl md:text-5xl font-extrabold tracking-wide">2 4 2 1</h1>
                            </a>
                        </header>
                        <p class="text-lg md:text-xl font-semibold tracking-wide">Two Four Two One</p>
                    </div>
                    
                    <button type="button" @click="open = !open" class="md:hidden inline-flex p-2 items-center justify-center rounded-md text-black hover:bg-blue-700 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="block w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <nav class="flex flex-col mt-3 p-3 gap-3 w-full">
                    <div class="{{ request()->routeIs('dashboard') ? 'bg-gray-200 w-full text-2xl font-md' : 'w-44' }} flex items-center gap-2 rounded-sm h-12">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="{{ request()->routeIs('dashboard') ? '#8B5CF6' : '#000000' }}" viewBox="0 0 24 24" stroke-width="1.5" class="ml-10 w-9 h-9">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                        </svg>
                        <x-side-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="text-lg font-medium mt-1 flex items-center">
                            {{ __('Dashboard')}}
                        </x-side-nav-link>
                    </div>                    
                    
                    <div class="{{ request()->routeIs('customer') ? 'bg-gray-200 w-full' : 'w-44' }} flex items-center gap-2 rounded-sm h-12">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="{{ request()->routeIs('customer') ? '#8B5CF6' : '#00000'}}" viewBox="0 0 24 24" stroke-width="1.5" class="ml-10 w-9 h-9">
                            <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z" clip-rule="evenodd" />
                            <path d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
                        </svg>  
                        <x-side-nav-link href="{{ route('customer') }}" :active="request()->routeIs('customer')" class="text-lg font-medium mt-1 flex items-center w-full">
                            {{ __('Customers')}}
                        </x-side-nav-link>
                    </div>

                    <div class="{{ request()->routeIs('order') ? 'bg-gray-200 w-full' : 'w-44' }} flex items-center gap-2 rounded-sm h-12">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="{{ request()->routeIs('order') ? '#8B5CF6' : '#000000'}}" viewBox="0 0 24 24" stroke-width="1.5" class="ml-10 w-9 h-9">
                            <path fill-rule="evenodd" d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 0 0 4.25 22.5h15.5a1.875 1.875 0 0 0 1.865-2.071l-1.263-12a1.875 1.875 0 0 0-1.865-1.679H16.5V6a4.5 4.5 0 1 0-9 0ZM12 3a3 3 0 0 0-3 3v.75h6V6a3 3 0 0 0-3-3Zm-3 8.25a3 3 0 1 0 6 0v-.75a.75.75 0 0 1 1.5 0v.75a4.5 4.5 0 1 1-9 0v-.75a.75.75 0 0 1 1.5 0v.75Z" clip-rule="evenodd" />
                        </svg>    
                        <x-side-nav-link href="{{ route('order') }}" :active="request()->routeIs('order')" class="text-lg font-medium mt-1 flex items-center w-full">
                            {{ __('Orders')}}
                        </x-side-nav-link>
                    </div>

                    <div class="{{ request()->routeIs('analytic') ? 'bg-gray-200 w-full' : 'w-44' }} flex items-center gap-2 rounded-sm h-12">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="{{ request()->routeIs('analytic') ? '#8B5CF6' : '#000000'}}" viewBox="0 0 24 24" stroke-width="1.5" class="ml-10 w-9 h-9">
                            <path fill-rule="evenodd" d="M15.22 6.268a.75.75 0 0 1 .968-.431l5.942 2.28a.75.75 0 0 1 .431.97l-2.28 5.94a.75.75 0 1 1-1.4-.537l1.63-4.251-1.086.484a11.2 11.2 0 0 0-5.45 5.173.75.75 0 0 1-1.199.19L9 12.312l-6.22 6.22a.75.75 0 0 1-1.06-1.061l6.75-6.75a.75.75 0 0 1 1.06 0l3.606 3.606a12.695 12.695 0 0 1 5.68-4.974l1.086-.483-4.251-1.632a.75.75 0 0 1-.432-.97Z" clip-rule="evenodd" />
                        </svg>      
                        <x-side-nav-link href="{{ route('analytic') }}" :active="request()->routeIs('analytic')" class="text-lg font-medium mt-1 flex items-center w-full">
                            {{ __('Analytics')}}
                        </x-side-nav-link>
                    </div>

                    <div class="{{ request()->routeIs('message') ? 'bg-gray-200 w-full' : 'w-44' }} flex items-center gap-2 rounded-sm h-12">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="{{ request()->routeIs('message') ? '#8B5CF6' : '#000000'}}" viewBox="0 0 24 24" stroke-width="1.5" class="ml-10 w-9 h-9">
                            <path d="M4.913 2.658c2.075-.27 4.19-.408 6.337-.408 2.147 0 4.262.139 6.337.408 1.922.25 3.291 1.861 3.405 3.727a4.403 4.403 0 0 0-1.032-.211 50.89 50.89 0 0 0-8.42 0c-2.358.196-4.04 2.19-4.04 4.434v4.286a4.47 4.47 0 0 0 2.433 3.984L7.28 21.53A.75.75 0 0 1 6 21v-4.03a48.527 48.527 0 0 1-1.087-.128C2.905 16.58 1.5 14.833 1.5 12.862V6.638c0-1.97 1.405-3.718 3.413-3.979Z" />
                            <path d="M15.75 7.5c-1.376 0-2.739.057-4.086.169C10.124 7.797 9 9.103 9 10.609v4.285c0 1.507 1.128 2.814 2.67 2.94 1.243.102 2.5.157 3.768.165l2.782 2.781a.75.75 0 0 0 1.28-.53v-2.39l.33-.026c1.542-.125 2.67-1.433 2.67-2.94v-4.286c0-1.505-1.125-2.811-2.664-2.94A49.392 49.392 0 0 0 15.75 7.5Z" />
                        </svg>      
                        <x-side-nav-link href="{{ route('message') }}" :active="request()->routeIs('message')" class="text-lg font-medium mt-1 flex items-center w-full">
                            {{ __('Messages')}}
                        </x-side-nav-link>
                    </div>

                    <div class="{{ request()->routeIs('product') ? 'bg-gray-200 w-full' : 'w-44' }} flex items-center gap-2 rounded-sm h-12">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="{{ request()->routeIs('product') ? '#8B5CF6' : '#000000'}}" viewBox="0 0 24 24" stroke-width="1.5" class="ml-10 w-9 h-9">
                            <path fill-rule="evenodd" d="M1.5 7.125c0-1.036.84-1.875 1.875-1.875h6c1.036 0 1.875.84 1.875 1.875v3.75c0 1.036-.84 1.875-1.875 1.875h-6A1.875 1.875 0 0 1 1.5 10.875v-3.75Zm12 1.5c0-1.036.84-1.875 1.875-1.875h5.25c1.035 0 1.875.84 1.875 1.875v8.25c0 1.035-.84 1.875-1.875 1.875h-5.25a1.875 1.875 0 0 1-1.875-1.875v-8.25ZM3 16.125c0-1.036.84-1.875 1.875-1.875h5.25c1.036 0 1.875.84 1.875 1.875v2.25c0 1.035-.84 1.875-1.875 1.875h-5.25A1.875 1.875 0 0 1 3 18.375v-2.25Z" clip-rule="evenodd" />
                        </svg>        
                        <x-side-nav-link href="{{ route('product') }}" :active="request()->routeIs('product')" class="text-lg font-medium mt-1 flex items-center w-full">
                            {{ __('Products')}}
                        </x-side-nav-link>
                    </div>


                    <div class="{{ request()->routeIs('product-add-view') ? 'bg-gray-200 w-full' : 'w-44' }} flex items-center gap-2 rounded-sm h-12">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="{{ request()->routeIs('product-add-view') ? '#8B5CF6' : '#000000'}}" viewBox="0 0 24 24" stroke-width="1.5" class="ml-10 w-6 h-6">
                            <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                            <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                        </svg>
                                 
                        <x-side-nav-link href="{{ route('product-add-view') }}" :active="request()->routeIs('product-add-view')" class="text-lg font-medium mt-1 flex items-center w-full">
                            {{ __(' Add Product')}}
                        </x-side-nav-link>
                    </div>
                </nav>
                
            </aside>
            <!-- Main -->
           <!-- Main -->
        <main class="flex-1 h-screen bg-gray-100">
            <!-- Top Navigation -->
            <nav class="bg-gray-100">
                <div class="mx-auto px-2 sm:px-6 lg:px-8">
                    <div class="relative flex items-center justify-between h-16">
                        <div class="absolute inset-y-0 left-0 flex items-center md:hidden">
                            <button type="button" @click="open = !open" @click.away="open = false" class="inline-flex items-center justify-center p-2 rounded-md text-black hover:bg-blue-700 focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="block w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7"></path>
                                </svg>
                            </button>
                        </div>
                        <!-- User Dropdown -->
                        <div class="sm:flex flex items-center justify-center sm:items-center absolute inset-y-0 right-0">
                            <div x-data="{ open: false }" class="relative">
                                <button @click="open = !open" class="inline-flex items-center px-3 py-2 border border-transparent text-md leading-4 font-lg rounded-md text-black-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    {{ Auth::user()->firtsname }}
                                    <svg class="fill-current h-4 w-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0l3.95 3.95a1 1 0 001.414 0l3.95-3.95a1 1 0 111.414 1.414l-5.657 5.657a1 1 0 01-1.414 0L3.88 8.707a1 1 0 010-1.414l1.414-1.414a1 1 0 010 1.414l-1.414 1.414a1 1 0 01-.707.293 1 1 0 01-.707-.293 1 1 0 010-1.414l1.414-1.414a1 1 0 011.414 0l1.414 1.414a1 1 0 000 1.414l-1.414 1.414a1 1 0 01-1.414 0L5.293 7.293z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <!-- Dropdown Menu -->
                                <div x-show="open" @click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 sm:w-48 sm:top-full sm:mt-1 sm:ml-6">
                                    <div class="py-1">
                                        <x-dropdown-link :href="route('profile.edit')">
                                            {{ __('Edit Profile') }}
                                        </x-dropdown-link>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Main Content -->
            <div>
                {{ $slot }}
            </div>
        </main>
    </div>
</body>
</html>