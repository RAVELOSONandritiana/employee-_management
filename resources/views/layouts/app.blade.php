<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title','About page')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

            @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>

        <header class="sticky top-0 z-50 bg-gradient-to-r from-indigo-500 to-purple-600 shadow-lg">
            <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <!-- Logo -->
                    <a href="/" class="flex items-center gap-2 group">
                        <span class="w-10 h-10 bg-white text-indigo-600 rounded-lg flex items-center justify-center text-xl font-extrabold group-hover:scale-105 transition-transform">E</span>
                        <span class="text-white font-bold text-xl tracking-tight hidden sm:block">Employee</span>
                    </a>

                    <!-- Desktop Menu -->
                    <ul class="hidden md:flex items-center gap-2">
                        <li>
                            <a href="/" class="px-4 py-2 rounded-lg text-white/80 hover:text-white hover:bg-white/15 transition-all duration-200 font-medium {{ request()->routeIs('home') ? 'bg-white/20 text-white shadow-md' : ''}}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}" class="px-4 py-2 rounded-lg text-white/80 hover:text-white hover:bg-white/15 transition-all duration-200 font-medium {{ request()->routeIs('about') ? 'bg-white/20 text-white shadow-md' : ''}}">About</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}" class="px-4 py-2 rounded-lg text-white/80 hover:text-white hover:bg-white/15 transition-all duration-200 font-medium {{ request()->routeIs('contact') ? 'bg-white/20 text-white shadow-md' : ''}}">Contact</a>
                        </li>
                    </ul>

                    <!-- Mobile Toggle -->
                    <button class="md:hidden p-2 text-white hover:bg-white/15 rounded-lg transition-colors" id="mobile-toggle" aria-label="Toggle menu">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>

                <!-- Mobile Menu -->
                <div class="md:hidden hidden" id="mobile-menu">
                    <ul class="pb-4 space-y-1">
                        <li>
                            <a href="/" class="block px-4 py-3 rounded-lg text-white/80 hover:text-white hover:bg-white/15 transition-all font-medium {{ request()->routeIs('home') ? 'bg-white/20 text-white' : ''}}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}" class="block px-4 py-3 rounded-lg text-white/80 hover:text-white hover:bg-white/15 transition-all font-medium {{ request()->routeIs('about') ? 'bg-white/20 text-white' : ''}}">About</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}" class="block px-4 py-3 rounded-lg text-white/80 hover:text-white hover:bg-white/15 transition-all font-medium {{ request()->routeIs('contact') ? 'bg-white/20 text-white' : ''}}">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main class="min-h-screen">
            @yield('content')
        </main>
    </body>
</html>