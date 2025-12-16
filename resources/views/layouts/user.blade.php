<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $metaTitle ?? 'Jaya Kulit – Kerajinan Kulit Asli' }}</title>

    <meta name="description"
          content="{{ $metaDescription ?? 'Kerajinan dan reparasi kulit: jaket, tas, sandal, dompet, sabuk.' }}">

    <meta name="keywords"
          content="jaket kulit, tas kulit, reparasi kulit, jaya kulit, kerajinan kulit">

    <meta property="og:title"
          content="{{ $metaTitle ?? 'Jaya Kulit' }}">

    <meta property="og:description"
          content="{{ $metaDescription ?? 'Kerajinan dan reparasi kulit berkualitas.' }}">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['../resources/css/app.css', '../resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-800">

    {{-- MODERN NAVBAR --}}
    <header class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex items-center justify-between h-20">

                {{-- LOGO --}}
                <a href="/" class="flex items-center gap-3 group">
                    <div class="w-12 h-12 bg-gradient-to-br from-amber-500 to-orange-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                        </svg>
                    </div>
                    <div>
                        <span class="block text-xl font-bold text-gray-900 group-hover:text-brand transition-colors">Jaya Kulit</span>
                        <span class="block text-xs text-gray-500">Premium Leather Craft</span>
                    </div>
                </a>

                {{-- DESKTOP MENU --}}
                <nav class="hidden md:flex items-center gap-8">
                    <a href="/" class="relative text-gray-700 hover:text-brand font-medium transition-colors group">
                        <span>Home</span>
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-brand group-hover:w-full transition-all duration-300"></span>
                    </a>

                    <a href="/products" class="relative text-gray-700 hover:text-brand font-medium transition-colors group">
                        <span>Produk</span>
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-brand group-hover:w-full transition-all duration-300"></span>
                    </a>

                    <a href="/about" class="relative text-gray-700 hover:text-brand font-medium transition-colors group">
                        <span>Tentang Kami</span>
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-brand group-hover:w-full transition-all duration-300"></span>
                    </a>

                    <a href="/service" class="relative text-gray-700 hover:text-brand font-medium transition-colors group">
                        <span>Reparasi</span>
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-brand group-hover:w-full transition-all duration-300"></span>
                    </a>

                    {{-- CART BUTTON --}}
                    <a href="/cart" class="relative flex items-center gap-2 bg-gradient-to-r from-amber-500 to-orange-600 text-white px-6 py-2.5 rounded-full shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        <span class="font-semibold">Keranjang</span>

                        @php
                            $cartCount = collect(session('cart', []))->sum('qty');
                        @endphp

                        @if($cartCount > 0)
                            <span class="absolute -top-2 -right-2 bg-red-600 text-white text-xs w-6 h-6 flex items-center justify-center rounded-full font-bold shadow-lg animate-pulse">
                                {{ $cartCount }}
                            </span>
                        @endif
                    </a>
                </nav>

                {{-- MOBILE MENU BUTTON --}}
                <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>

        {{-- MOBILE MENU --}}
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200 shadow-xl">
            <nav class="px-4 py-6 space-y-4">
                <a href="/" class="block text-gray-700 hover:text-brand hover:bg-gray-50 px-4 py-3 rounded-lg font-medium transition-colors">
                    Home
                </a>
                <a href="/products" class="block text-gray-700 hover:text-brand hover:bg-gray-50 px-4 py-3 rounded-lg font-medium transition-colors">
                    Produk
                </a>
                <a href="/about" class="block text-gray-700 hover:text-brand hover:bg-gray-50 px-4 py-3 rounded-lg font-medium transition-colors">
                    Tentang Kami
                </a>
                <a href="/service" class="block text-gray-700 hover:text-brand hover:bg-gray-50 px-4 py-3 rounded-lg font-medium transition-colors">
                    Reparasi
                </a>
                <a href="/cart" class="flex items-center justify-between text-white bg-gradient-to-r from-amber-500 to-orange-600 px-4 py-3 rounded-lg font-semibold shadow-lg">
                    <span>Keranjang</span>
                    @if($cartCount > 0)
                        <span class="bg-red-600 text-white text-xs px-3 py-1 rounded-full font-bold">
                            {{ $cartCount }}
                        </span>
                    @endif
                </a>
            </nav>
        </div>
    </header>

    {{-- SPACER for fixed header --}}
    <div class="h-20"></div>

    {{-- CONTENT --}}
    <main>
        @yield('content')
    </main>

    {{-- MODERN FOOTER --}}
    <footer class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white mt-20">
        <div class="max-w-7xl mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                
                {{-- BRAND SECTION --}}
                <div class="col-span-1 md:col-span-1">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-amber-500 to-orange-600 rounded-xl flex items-center justify-center shadow-lg">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                            </svg>
                        </div>
                        <span class="text-2xl font-bold">Jaya Kulit</span>
                    </div>
                    <p class="text-gray-400 leading-relaxed mb-4">
                        Kerajinan kulit premium handmade berkualitas tinggi. Melayani pembuatan dan reparasi produk kulit sejak 2010.
                    </p>
                    <div class="flex gap-3">
                        <a href="#" class="w-10 h-10 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="https://wa.me/6282141103094" class="w-10 h-10 bg-green-500 hover:bg-green-600 rounded-full flex items-center justify-center transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- QUICK LINKS --}}
                <div>
                    <h3 class="text-lg font-bold mb-4 text-amber-400">Quick Links</h3>
                    <ul class="space-y-3">
                        <li><a href="/" class="text-gray-400 hover:text-white hover:translate-x-1 inline-block transition-all">Home</a></li>
                        <li><a href="/products" class="text-gray-400 hover:text-white hover:translate-x-1 inline-block transition-all">Produk</a></li>
                        <li><a href="/about" class="text-gray-400 hover:text-white hover:translate-x-1 inline-block transition-all">Tentang Kami</a></li>
                        <li><a href="/service" class="text-gray-400 hover:text-white hover:translate-x-1 inline-block transition-all">Reparasi</a></li>
                        <li><a href="/cart" class="text-gray-400 hover:text-white hover:translate-x-1 inline-block transition-all">Keranjang</a></li>
                    </ul>
                </div>

                {{-- PRODUK --}}
                <div>
                    <h3 class="text-lg font-bold mb-4 text-amber-400">Produk Kami</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white hover:translate-x-1 inline-block transition-all">Jaket Kulit</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white hover:translate-x-1 inline-block transition-all">Tas Kulit</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white hover:translate-x-1 inline-block transition-all">Sandal Kulit</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white hover:translate-x-1 inline-block transition-all">Dompet Kulit</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white hover:translate-x-1 inline-block transition-all">Sabuk Kulit</a></li>
                    </ul>
                </div>

                {{-- KONTAK --}}
                <div>
                    <h3 class="text-lg font-bold mb-4 text-amber-400">Hubungi Kami</h3>
                    <ul class="space-y-3 text-gray-400 text-sm">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-amber-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span>Jl. K.H. Hasyim Ashari No.35,<br/>Kauman, Kec. Klojen, Kota Malang, Jawa Timur</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-amber-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <a href="https://wa.me/6282141103094" class="hover:text-white transition-colors">+62 821-4110-3094</a>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-amber-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <a href="mailto:info@jayakulit.com" class="hover:text-white transition-colors">info@jayakulit.com</a>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- BOTTOM BAR --}}
            <div class="border-t border-gray-700 mt-12 pt-6 pb-2 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-gray-400 text-sm">
                    © {{ date('Y') }} <span class="text-amber-400 font-semibold">Jaya Kulit</span>. All rights reserved.
                </p>
                <div class="flex gap-6 text-sm text-gray-400">
                    <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                    <a href="#" class="hover:text-white transition-colors">FAQ</a>
                </div>
            </div>
        </div>
    </footer>

    {{-- SCROLL TO TOP BUTTON --}}
    <button id="scrollToTop" class="hidden fixed bottom-24 right-6 z-40 w-12 h-12 bg-gray-800 hover:bg-gray-900 text-white rounded-full shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110">
        <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
        </svg>
    </button>

    {{-- FLOATING WHATSAPP BUTTON --}}
    <a href="https://wa.me/6282141103094" 
       target="_blank"
       class="fixed bottom-6 right-6 z-50 w-16 h-16 bg-green-500 hover:bg-green-600 rounded-full shadow-2xl flex items-center justify-center group hover:scale-110 transition-all duration-300 animate-bounce">
        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
        </svg>
        <span class="absolute -top-1 -right-1 w-4 h-4 bg-red-500 rounded-full animate-ping"></span>
    </a>

    <script>
    // Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // Scroll to Top Button
    const scrollToTopBtn = document.getElementById('scrollToTop');
    
    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
            scrollToTopBtn.classList.remove('hidden');
        } else {
            scrollToTopBtn.classList.add('hidden');
        }
    });

    scrollToTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Add to Cart Function
    function addToCart(productId) {
        fetch(`/cart/add/${productId}`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json'
            }
        })
        .then(res => res.json())
        .then(data => {
            let badge = document.getElementById('cart-count');
            if (!badge) {
                location.reload();
            } else {
                badge.innerText = data.count;
            }
        });
    }

    // Smooth Scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    </script>

</body>
</html>