@extends('layouts.app')

@section('title', 'À propos - Employee Management')

@section('content')
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-slate-900">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25px 25px, white 2px, transparent 0); background-size: 50px 50px;"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                    À propos de <span class="text-emerald-400">notre solution</span>
                </h1>
                <p class="text-lg text-slate-400 max-w-2xl mx-auto">
                    Nous croyons que la gestion des ressources humaines devrait être simple, accessible et gratuite pour toutes les entreprises.
                </p>
            </div>
        </div>
        
        <!-- Wave Divider -->
        <div class="absolute -bottom-1 left-0 right-0">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-20 md:h-32" preserveAspectRatio="none">
                <path d="M0 120L60 110C120 100 240 80 360 65C480 50 600 45 720 50C840 55 960 65 1080 72C1200 80 1320 85 1380 85L1440 85V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="#f8fafc"/>
            </svg>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-sm font-medium mb-6">
                        <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                        Notre Mission
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-6">
                        Démocratiser la gestion des ressources humaines
                    </h2>
                    <p class="text-lg text-slate-600 mb-6">
                        Notre mission est de fournir aux petites et moyennes entreprises un outil puissant et gratuit pour gérer leurs employés efficacement.
                    </p>
                    <p class="text-slate-600">
                        Nous comprenons que les petites entreprises ont des besoins similaires aux grandes entreprises mais avec des ressources limitées. C'est pourquoi nous avons créé une solution complète qui ne vous coûte rien.
                    </p>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100">
                        <div class="text-4xl font-bold text-emerald-500 mb-2">100%</div>
                        <div class="text-slate-600">Gratuit</div>
                    </div>
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100">
                        <div class="text-4xl font-bold text-blue-500 mb-2">Libre</div>
                        <div class="text-slate-600">Accès</div>
                    </div>
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100">
                        <div class="text-4xl font-bold text-purple-500 mb-2">∞</div>
                        <div class="text-slate-600">Illimité</div>
                    </div>
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100">
                        <div class="text-4xl font-bold text-amber-500 mb-2">100%</div>
                        <div class="text-slate-600">Sécurisé</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Details Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Ce que nous offrons</h2>
                <p class="text-lg text-slate-600 max-w-2xl mx-auto">Une solution complète pour gérer tous aspects de vos ressources humaines</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-slate-50 rounded-2xl p-8 border border-slate-100">
                    <div class="w-14 h-14 rounded-2xl bg-emerald-100 flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Gestion des présences</h3>
                    <p class="text-slate-600">Suivez et gérez les présences, absences et congés de vos employés avec un système intuitif.</p>
                </div>
                
                <!-- Feature 2 -->
                <div class="bg-slate-50 rounded-2xl p-8 border border-slate-100">
                    <div class="w-14 h-14 rounded-2xl bg-blue-100 flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Gestion des salaires</h3>
                    <p class="text-slate-600">Calculez les salaires, générez les bulletins de paie et gérez les primes facilement.</p>
                </div>
                
                <!-- Feature 3 -->
                <div class="bg-slate-50 rounded-2xl p-8 border border-slate-100">
                    <div class="w-14 h-14 rounded-2xl bg-purple-100 flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Statistiques & Rapports</h3>
                    <p class="text-slate-600">Visualisez des tableaux de bord détaillés et générez des rapports pour prendre les meilleures décisions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-20 bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Pourquoi nous choisir ?</h2>
                <p class="text-lg text-slate-400 max-w-2xl mx-auto">Les avantages de notre solution</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-slate-800/50 backdrop-blur-sm border border-slate-700/50 rounded-2xl p-8">
                    <div class="w-12 h-12 rounded-xl bg-emerald-500/20 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Entièrement gratuit</h3>
                    <p class="text-slate-400">Pas de frais cachés, pas de limitations. Tout ce dont vous avez besoin est gratuit.</p>
                </div>
                
                <div class="bg-slate-800/50 backdrop-blur-sm border border-slate-700/50 rounded-2xl p-8">
                    <div class="w-12 h-12 rounded-xl bg-blue-500/20 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Libre accès</h3>
                    <p class="text-slate-400">Code source ouvert, modifiable et adaptable selon vos besoins spécifiques.</p>
                </div>
                
                <div class="bg-slate-800/50 backdrop-blur-sm border border-slate-700/50 rounded-2xl p-8">
                    <div class="w-12 h-12 rounded-xl bg-purple-500/20 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Interface moderne</h3>
                    <p class="text-slate-400">Design intuitif et moderne pour une expérience utilisateur optimale.</p>
                </div>
                
                <div class="bg-slate-800/50 backdrop-blur-sm border border-slate-700/50 rounded-2xl p-8">
                    <div class="w-12 h-12 rounded-xl bg-amber-500/20 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Sécurisé</h3>
                    <p class="text-slate-400">Vos données sont protégées avec les dernières technologies de sécurité.</p>
                </div>
                
                <div class="bg-slate-800/50 backdrop-blur-sm border border-slate-700/50 rounded-2xl p-8">
                    <div class="w-12 h-12 rounded-xl bg-rose-500/20 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-rose-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Multi-plateforme</h3>
                    <p class="text-slate-400">Accessible depuis n'importe quel appareil avec un navigateur web.</p>
                </div>
                
                <div class="bg-slate-800/50 backdrop-blur-sm border border-slate-700/50 rounded-2xl p-8">
                    <div class="w-12 h-12 rounded-xl bg-cyan-500/20 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Facile à installer</h3>
                    <p class="text-slate-400">Installation simple et rapide, sans connaissances techniques avancées.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-slate-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-6">Prêt à commencer ?</h2>
            <p class="text-lg text-slate-600 mb-8">Essayez notre solution gratuitement et simplifiez la gestion de vos employés</p>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-3 px-8 py-4 bg-emerald-500 hover:bg-emerald-600 text-white font-bold text-lg rounded-2xl transition-all duration-300 hover:shadow-2xl hover:shadow-emerald-500/25 hover:-translate-y-1">
                Nous contacter
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </a>
        </div>
    </section>
@endsection
