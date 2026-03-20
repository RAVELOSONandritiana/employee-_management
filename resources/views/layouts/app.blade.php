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

        <!-- Footer -->
        <footer class="bg-slate-900 border-t border-slate-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <div class="grid md:grid-cols-4 gap-8">
                    <!-- Brand -->
                    <div class="md:col-span-2">
                        <a href="/" class="flex items-center gap-2 mb-4">
                            <span class="w-10 h-10 bg-emerald-500 text-white rounded-lg flex items-center justify-center text-xl font-extrabold">E</span>
                            <span class="text-white font-bold text-xl">Employee Management</span>
                        </a>
                        <p class="text-slate-400 mb-4 max-w-md">
                            Solution gratuite et open source pour la gestion des employés. Gérez les présences, salaires et informations de vos employés en toute simplicité.
                        </p>
                        <div class="flex gap-4">
                            <a href="#" class="w-10 h-10 bg-slate-800 hover:bg-emerald-500 rounded-lg flex items-center justify-center text-slate-400 hover:text-white transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-slate-800 hover:bg-emerald-500 rounded-lg flex items-center justify-center text-slate-400 hover:text-white transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-slate-800 hover:bg-emerald-500 rounded-lg flex items-center justify-center text-slate-400 hover:text-white transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Quick Links -->
                    <div>
                        <h4 class="text-white font-bold mb-4">Liens rapides</h4>
                        <ul class="space-y-2">
                            <li><a href="/" class="text-slate-400 hover:text-emerald-400 transition-colors">Accueil</a></li>
                            <li><a href="{{ route('about') }}" class="text-slate-400 hover:text-emerald-400 transition-colors">À propos</a></li>
                            <li><a href="{{ route('contact') }}" class="text-slate-400 hover:text-emerald-400 transition-colors">Contact</a></li>
                        </ul>
                    </div>
                    
                    <!-- Legal -->
                    <div>
                        <h4 class="text-white font-bold mb-4">Légal</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-slate-400 hover:text-emerald-400 transition-colors">Politique de confidentialité</a></li>
                            <li><a href="#" class="text-slate-400 hover:text-emerald-400 transition-colors">Conditions d'utilisation</a></li>
                            <li><a href="#" class="text-slate-400 hover:text-emerald-400 transition-colors">Mentions légales</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="border-t border-slate-800 mt-12 pt-8">
                    <p class="text-center text-slate-400 text-sm">
                        © {{ date('Y') }} Employee Management. Tous droits réservés. Solution open source et gratuite.
                    </p>
                </div>
            </div>
        </footer>
    </body>
</html>