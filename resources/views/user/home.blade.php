@extends('layouts.user')

@section('content')

{{-- HERO SECTION --}}
<section class="relative h-screen flex items-center justify-center overflow-hidden">
    {{-- Background Image with Parallax Effect --}}
    <div class="absolute inset-0">
        <img src="{{ asset('images/hero.jpeg') }}"
             class="w-full h-full object-cover transform scale-110"
             alt="Kerajinan Kulit Jaya Kulit">
        <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/50 to-black/70"></div>
    </div>

    {{-- Decorative Elements --}}
    <div class="absolute top-20 left-10 w-32 h-32 border-2 border-white/20 rounded-full animate-pulse"></div>
    <div class="absolute bottom-20 right-10 w-24 h-24 border-2 border-white/20 rounded-full animate-pulse delay-300"></div>

    {{-- Content --}}
    <div class="relative z-10 text-center text-white px-4 max-w-4xl">
        <div class="mb-6 inline-block">
            <span class="px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-sm font-semibold border border-white/30">
                ✨ Handcrafted Leather Products
            </span>
        </div>
        
        <h1 class="text-5xl md:text-7xl font-bold mb-6 font-serif tracking-tight">
            <span class="block">Kerajinan</span>
            <span class="block text-transparent bg-clip-text bg-gradient-to-r from-amber-200 to-yellow-400">
                JAYA KULIT
            </span>
        </h1>

        <p class="text-xl md:text-2xl mb-8 text-gray-200 max-w-2xl mx-auto leading-relaxed">
            Jaket, Tas, Sandal, Dompet, Sabuk – Dibuat dengan tangan dari kulit pilihan berkualitas tinggi
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a href="https://wa.me/6282141103094"
               class="group inline-flex items-center gap-3 bg-gradient-to-r from-green-500 to-green-600 text-white font-semibold px-8 py-4 rounded-full shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                </svg>
                <span>Pesan via WhatsApp</span>
                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
            </a>

            <a href="#produk"
               class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm text-white font-semibold px-8 py-4 rounded-full border-2 border-white/30 hover:bg-white/20 transition-all duration-300">
                <span>Lihat Produk</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </a>
        </div>

        {{-- Stats --}}
        <div class="mt-16 grid grid-cols-3 gap-8 max-w-2xl mx-auto">
            <div class="text-center">
                <div class="text-3xl font-bold text-amber-400">1000+</div>
                <div class="text-sm text-gray-300 mt-1">Produk Terjual</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold text-amber-400">500+</div>
                <div class="text-sm text-gray-300 mt-1">Pelanggan Puas</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold text-amber-400">10+</div>
                <div class="text-sm text-gray-300 mt-1">Tahun Berpengalaman</div>
            </div>
        </div>
    </div>

    {{-- Scroll Indicator --}}
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
        </svg>
    </div>
</section>

{{-- KEUNGGULAN --}}
<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-4">Mengapa Memilih Kami?</h2>
            <p class="text-gray-600 text-lg">Keunggulan produk kulit kami</p>
        </div>

        <div class="grid md:grid-cols-4 gap-8">
            <div class="group text-center p-6 rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-amber-400 to-orange-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2">100% Handmade</h3>
                <p class="text-gray-600">Setiap produk dibuat dengan tangan oleh pengrajin berpengalaman</p>
            </div>

            <div class="group text-center p-6 rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-blue-400 to-blue-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2">Kulit Berkualitas</h3>
                <p class="text-gray-600">Menggunakan kulit asli pilihan dengan kualitas terbaik</p>
            </div>

            <div class="group text-center p-6 rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-green-400 to-green-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2">Custom Design</h3>
                <p class="text-gray-600">Bisa custom sesuai keinginan dan kebutuhan Anda</p>
            </div>

            <div class="group text-center p-6 rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-purple-400 to-purple-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2">Tahan Lama</h3>
                <p class="text-gray-600">Produk berkualitas tinggi yang awet dan tahan lama</p>
            </div>
        </div>
    </div>
</section>

{{-- PRODUK UNGGULAN --}}
@if(!empty($featuredProducts) && $featuredProducts->count())
<section id="produk" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 bg-amber-100 text-amber-800 rounded-full text-sm font-semibold mb-4">
                Koleksi Terbaik
            </span>
            <h2 class="text-4xl font-bold mb-4">Produk Unggulan</h2>
            <p class="text-gray-600 text-lg">Pilihan terbaik dari koleksi kami</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($featuredProducts as $product)
            <div class="group bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden hover:-translate-y-2">
                {{-- Image Container --}}
                <div class="relative overflow-hidden aspect-square">
                    @if($product->image)
                        <img src="{{ asset('storage/'.$product->image) }}"
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                             alt="{{ $product->name }}">
                    @else
                        <div class="w-full h-full bg-gradient-to-br from-amber-400 to-orange-500 flex items-center justify-center">
                            <span class="text-white text-2xl font-bold">
                                {{ strtoupper(substr($product->category->name ?? 'P', 0, 1)) }}
                            </span>
                        </div>
                    @endif
                    
                    {{-- Category Badge --}}
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1 bg-white/90 backdrop-blur-sm text-xs font-semibold rounded-full shadow-lg">
                            {{ $product->category->name ?? 'Produk' }}
                        </span>
                    </div>

                    {{-- Overlay on Hover --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>

                {{-- Content --}}
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 group-hover:text-brand transition-colors line-clamp-1">
                        {{ $product->name }}
                    </h3>

                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                        {{ $product->description }}
                    </p>

                    {{-- Price --}}
                    <div class="flex items-baseline gap-2 mb-4">
                        <span class="text-2xl font-bold text-brand">
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        </span>
                    </div>

                    {{-- CTA Button --}}
                    @php
                        $waText = urlencode("Halo, saya tertarik dengan produk: ".$product->name);
                    @endphp

                    <a href="https://wa.me/6282141103094?text={{ $waText }}"
                       target="_blank"
                       class="group/btn flex items-center justify-center gap-2 w-full bg-gradient-to-r from-green-500 to-green-600 text-white py-3 rounded-xl font-semibold hover:shadow-xl transition-all duration-300 hover:scale-105">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                        </svg>
                        <span>Pesan Sekarang</span>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        {{-- View All Products Link --}}
        <div class="text-center mt-12">
            <a href="https://wa.me/6282141103094?text=Halo, saya ingin melihat katalog produk lengkap"
               target="_blank"
               class="inline-flex items-center gap-2 text-brand font-semibold text-lg hover:gap-4 transition-all">
                <span>Lihat Katalog Lengkap</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>
@endif

{{-- SERVICE / REPARASI --}}
<section class="relative py-20 overflow-hidden">
    {{-- Background Pattern --}}
    <div class="absolute inset-0 bg-gradient-to-br from-amber-50 via-orange-50 to-amber-100"></div>
    <div class="absolute inset-0 opacity-5" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23000000\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>

    <div class="relative max-w-6xl mx-auto px-4">
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">
            <div class="grid md gap-0">
                {{-- Left Side - Content --}}
                <div class="p-12 flex flex-col justify-center">
                    <div class="inline-block mb-4">
                        <span class="px-4 py-2 bg-gradient-to-r from-amber-500 to-orange-500 text-white rounded-full text-sm font-semibold">
                            🔧 Layanan Profesional
                        </span>
                    </div>

                    <h2 class="text-4xl font-bold mb-6 leading-tight">
                        Service & Reparasi<br/>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-600 to-orange-600">
                            Kulit Berkualitas
                        </span>
                    </h2>

                    <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                        Kami melayani reparasi untuk berbagai produk kulit seperti jaket, tas, sandal, dompet, dan sabuk dengan hasil yang profesional.
                    </p>

                    {{-- Services List --}}
                    <div class="space-y-4 mb-8">
                        <div class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-6 h-6 rounded-full bg-green-100 flex items-center justify-center mt-1">
                                <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Ganti Resleting</h4>
                                <p class="text-sm text-gray-600">Resleting rusak atau macet bisa diganti dengan yang baru</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-6 h-6 rounded-full bg-green-100 flex items-center justify-center mt-1">
                                <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Jahit Ulang</h4>
                                <p class="text-sm text-gray-600">Perbaikan jahitan yang lepas atau rusak</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-6 h-6 rounded-full bg-green-100 flex items-center justify-center mt-1">
                                <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Ganti Warna</h4>
                                <p class="text-sm text-gray-600">Ubah warna produk kulit sesuai keinginan</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-6 h-6 rounded-full bg-green-100 flex items-center justify-center mt-1">
                                <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Dan Lain-lain</h4>
                                <p class="text-sm text-gray-600">Konsultasikan kebutuhan reparasi Anda</p>
                            </div>
                        </div>
                    </div>

                    <a href="https://wa.me/6282141103094?text=Halo, saya ingin reparasi barang kulit"
                       class="group inline-flex items-center justify-center gap-3 bg-gradient-to-r from-green-500 to-green-600 text-white font-semibold px-8 py-4 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:scale-105">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                        </svg>
                        <span>Konsultasi Reparasi</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                </div>

               
            </div>
        </div>
    </div>
</section>
@endsection



                