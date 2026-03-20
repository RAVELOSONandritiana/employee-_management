@extends('layouts.app')

@section('title', 'Contact - Employee Management')

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
                    Nous <span class="text-emerald-400">contacter</span>
                </h1>
                <p class="text-lg text-slate-400 max-w-2xl mx-auto">
                    Vous avez des questions ? N'hésitez pas à nous envoyer un message. Notre équipe est disponible pour vous aider.
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

    <!-- Contact Section -->
    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 lg:gap-16">
                <!-- Contact Form -->
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-slate-100">
                    <h2 class="text-2xl font-bold text-slate-900 mb-6">Envoyez-nous un message</h2>
                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm font-medium text-slate-700 mb-2">Nom complet</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all" placeholder="Votre nom" required>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-slate-700 mb-2">Adresse email</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all" placeholder="vous@exemple.com" required>
                        </div>
                        <div>
                            <label for="subject" class="block text-sm font-medium text-slate-700 mb-2">Sujet</label>
                            <input type="text" id="subject" name="subject" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all" placeholder="Sujet de votre message" required>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-slate-700 mb-2">Message</label>
                            <textarea id="message" name="message" rows="5" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all resize-none" placeholder="Votre message..." required></textarea>
                        </div>
                        <button type="submit" class="w-full px-6 py-4 bg-emerald-500 hover:bg-emerald-600 text-white font-bold rounded-xl transition-all duration-300 hover:shadow-lg hover:shadow-emerald-500/25">
                            Envoyer le message
                        </button>
                    </form>
                </div>
                
                <!-- Contact Info -->
                <div class="space-y-8">
                    <div class="bg-white rounded-2xl p-8 shadow-sm border border-slate-100">
                        <h2 class="text-2xl font-bold text-slate-900 mb-6">Nos coordonnées</h2>
                        <div class="space-y-6">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-emerald-100 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-slate-900 mb-1">Email</h3>
                                    <p class="text-slate-600">contact@employee-management.com</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-slate-900 mb-1">Téléphone</h3>
                                    <p class="text-slate-600">+261 34 12 345 67</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-purple-100 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-slate-900 mb-1">Adresse</h3>
                                    <p class="text-slate-600">Antananarivo, Madagascar</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Horaires -->
                    <div class="bg-white rounded-2xl p-8 shadow-sm border border-slate-100">
                        <h2 class="text-2xl font-bold text-slate-900 mb-6">Horaires d'ouverture</h2>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <span class="text-slate-600">Lundi - Vendredi</span>
                                <span class="font-medium text-slate-900">8h00 - 17h00</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-slate-600">Samedi</span>
                                <span class="font-medium text-slate-900">9h00 - 12h00</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-slate-600">Dimanche</span>
                                <span class="font-medium text-slate-900">Fermé</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Support -->
                    <div class="bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-2xl p-8 text-white">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-white/20 flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg mb-2">Support technique</h3>
                                <p class="text-emerald-100 mb-4">Notre équipe technique est disponible pour vous aider en cas de problème.</p>
                                <a href="mailto:support@employee-management.com" class="inline-flex items-center gap-2 text-white font-medium hover:underline">
                                    support@employee-management.com
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Questions fréquentes</h2>
                <p class="text-lg text-slate-600">Trouvez rapidement des réponses à vos questions</p>
            </div>
            
            <div class="space-y-4">
                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100">
                    <h3 class="font-bold text-slate-900 mb-2">Comment installer Employee Management ?</h3>
                    <p class="text-slate-600">L'installation est simple et ne nécessite pas de connaissances techniques avancées. Consultez notre documentation pour plus de détails.</p>
                </div>
                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100">
                    <h3 class="font-bold text-slate-900 mb-2">Le logiciel est-il vraiment gratuit ?</h3>
                    <p class="text-slate-600">Oui, notre solution est entièrement gratuite et open source. Vous pouvez l'utiliser sans limitation.</p>
                </div>
                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100">
                    <h3 class="font-bold text-slate-900 mb-2">Mes données sont-elles sécurisées ?</h3>
                    <p class="text-slate-600">Absolument. Nous utilisons les dernières technologies de sécurité pour protéger vos données. Vous êtes le seul propriétaire de vos données.</p>
                </div>
                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100">
                    <h3 class="font-bold text-slate-900 mb-2">Puis-je modifier le code source ?</h3>
                    <p class="text-slate-600">Oui, étant open source, vous pouvez modifier et adapter le code selon vos besoins spécifiques.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
