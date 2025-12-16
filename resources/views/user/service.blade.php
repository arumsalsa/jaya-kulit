@extends('layouts.user')

@section('title', 'Layanan Reparasi Kulit - Jaya Kulit')

@section('content')

{{-- HERO BANNER --}}
<section class="relative h-64 bg-gradient-to-br from-blue-500 via-indigo-500 to-purple-600 overflow-hidden">
    <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 h-full flex flex-col justify-center">
        <div class="text-white">
            <div class="inline-block bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-semibold mb-4">
                ⚙️ Layanan Profesional
            </div>
            <h1 class="text-5xl font-bold mb-4">Layanan Reparasi Kulit</h1>
            <p class="text-xl text-white/90 max-w-2xl">
                Ahli dalam memperbaiki dan merawat produk kulit kesayangan Anda dengan pengalaman bertahun-tahun
            </p>
        </div>
    </div>

    {{-- Decorative Elements --}}
    <div class="absolute top-10 right-10 w-32 h-32 border-4 border-white/20 rounded-full"></div>
    <div class="absolute bottom-10 left-10 w-24 h-24 border-4 border-white/20 rounded-full"></div>
</section>

<div class="max-w-7xl mx-auto px-4 py-12">

    {{-- Introduction --}}
    <div class="mb-12">
        <div class="bg-white rounded-2xl shadow-xl p-8 md:p-10">
            <div class="flex items-start gap-4">
                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                    <span class="text-2xl">🛠️</span>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-gray-800 mb-3">Kenapa Memilih Kami?</h2>
                    <p class="text-gray-600 leading-relaxed">
                        Dengan pengalaman bertahun-tahun dalam industri kerajinan kulit, kami memberikan layanan reparasi 
                        berkualitas tinggi dengan harga terjangkau. Setiap perbaikan dikerjakan dengan teliti dan profesional.
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- Services Grid --}}
    <div class="mb-12">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-gray-800 mb-3">Jenis Reparasi yang Kami Layani</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Berbagai jenis reparasi kulit dengan standar kualitas terbaik
            </p>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            
            {{-- Jaket Kulit --}}
            <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden hover:-translate-y-2">
                <div class="bg-gradient-to-br from-amber-50 to-orange-50 p-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-amber-500 to-orange-500 rounded-2xl flex items-center justify-center text-3xl mb-4 shadow-lg group-hover:scale-110 transition-transform">
                        🧥
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Jaket Kulit</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start gap-2">
                            <span class="text-green-600 mt-1">✓</span>
                            <span>Ganti resleting</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-600 mt-1">✓</span>
                            <span>Sped (Pewarnaan Ulang)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-600 mt-1">✓</span>
                            <span>Ganti lapisan dalam</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-600 mt-1">✓</span>
                            <span>Perbaikan kerah & lengan</span>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Tas Kulit --}}
            <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden hover:-translate-y-2">
                <div class="bg-gradient-to-br from-pink-50 to-rose-50 p-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-pink-500 to-rose-500 rounded-2xl flex items-center justify-center text-3xl mb-4 shadow-lg group-hover:scale-110 transition-transform">
                        👜
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Tas Kulit</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start gap-2">
                            <span class="text-green-600 mt-1">✓</span>
                            <span>Ganti tali & pegangan</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-600 mt-1">✓</span>
                            <span>Jahit ulang jahitan lepas</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-600 mt-1">✓</span>
                            <span>Ganti kancing & magnet</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-600 mt-1">✓</span>
                            <span>Perbaikan lapisan dalam</span>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Dompet Kulit --}}
            <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden hover:-translate-y-2">
                <div class="bg-gradient-to-br from-green-50 to-emerald-50 p-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center text-3xl mb-4 shadow-lg group-hover:scale-110 transition-transform">
                        👛
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Dompet Kulit</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start gap-2">
                            <span class="text-green-600 mt-1">✓</span>
                            <span>Jahit sobek & lepas</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-600 mt-1">✓</span>
                            <span>Ganti resleting</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-600 mt-1">✓</span>
                            <span>Perbaikan slot kartu</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-600 mt-1">✓</span>
                            <span>Ganti kancing</span>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Sandal & Sepatu --}}
            <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden hover:-translate-y-2">
                <div class="bg-gradient-to-br from-blue-50 to-cyan-50 p-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center text-3xl mb-4 shadow-lg group-hover:scale-110 transition-transform">
                        👞
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Sandal & Sepatu Kulit</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start gap-2">
                            <span class="text-green-600 mt-1">✓</span>
                            <span>Ganti sol & perekat</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-600 mt-1">✓</span>
                            <span>Jahit tali putus</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-600 mt-1">✓</span>
                            <span>Perbaikan jahitan</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-600 mt-1">✓</span>
                            <span>Ganti gesper & aksesoris</span>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Sabuk Kulit --}}
            <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden hover:-translate-y-2">
                <div class="bg-gradient-to-br from-purple-50 to-violet-50 p-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-violet-500 rounded-2xl flex items-center justify-center text-3xl mb-4 shadow-lg group-hover:scale-110 transition-transform">
                        👔
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Sabuk Kulit</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start gap-2">
                            <span class="text-green-600 mt-1">✓</span>
                            <span>Ganti gesper/buckle</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-600 mt-1">✓</span>
                            <span>Tambah lubang</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-600 mt-1">✓</span>
                            <span>Perbaikan sobek</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-600 mt-1">✓</span>
                            <span>Jahit ulang jahitan</span>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Custom Repairs --}}
            <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden hover:-translate-y-2">
                <div class="bg-gradient-to-br from-gray-50 to-slate-50 p-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-gray-500 to-slate-500 rounded-2xl flex items-center justify-center text-3xl mb-4 shadow-lg group-hover:scale-110 transition-transform">
                        🔧
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Reparasi Lainnya</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start gap-2">
                            <span class="text-green-600 mt-1">✓</span>
                            <span>Ikat pinggang</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-600 mt-1">✓</span>
                            <span>Sarung tangan kulit</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-600 mt-1">✓</span>
                            <span>Aksesori kulit lainnya</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-600 mt-1">✓</span>
                            <span>Konsultasi gratis</span>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    {{-- How It Works --}}
    <div class="mb-12">
        <div class="bg-white rounded-2xl shadow-xl p-8 md:p-10">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">Cara Memesan Reparasi</h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-full flex items-center justify-center text-white text-3xl font-bold mx-auto mb-4 shadow-lg">
                        1
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Kirim Foto</h3>
                    <p class="text-gray-600">
                        Kirimkan foto barang yang ingin diperbaiki melalui WhatsApp kami
                    </p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center text-white text-3xl font-bold mx-auto mb-4 shadow-lg">
                        2
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Estimasi Biaya</h3>
                    <p class="text-gray-600">
                        Kami akan berikan estimasi biaya dan waktu pengerjaan
                    </p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-emerald-500 rounded-full flex items-center justify-center text-white text-3xl font-bold mx-auto mb-4 shadow-lg">
                        3
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Proses Reparasi</h3>
                    <p class="text-gray-600">
                        Barang Anda akan diperbaiki oleh tangan ahli kami
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- CTA SECTION - Matching Product Page Style --}}
    <div class="bg-gradient-to-br from-blue-500 via-indigo-500 to-purple-600 rounded-3xl shadow-2xl overflow-hidden">
        <div class="px-8 py-12 text-center text-white relative">
            <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
            
            <div class="relative">
                <div class="text-5xl mb-4">💬</div>
                <h2 class="text-3xl font-bold mb-4">Siap Memperbaiki Barang Kulit Anda?</h2>
                <p class="text-xl mb-8 text-white/90 max-w-2xl mx-auto">
                    Konsultasikan kebutuhan reparasi Anda dengan kami sekarang juga!
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    @if(isset($about) && !empty($about->whatsapp))
                        <a href="https://wa.me/{{ $about->whatsapp }}?text=Halo, saya ingin menanyakan biaya reparasi barang kulit"
                           target="_blank"
                           class="inline-flex items-center gap-3 bg-white text-indigo-600 px-8 py-4 rounded-full font-semibold shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                            Konsultasi via WhatsApp
                        </a>
                    @else
                        <div class="inline-flex items-center gap-3 bg-gray-300 text-gray-500 px-8 py-4 rounded-full font-semibold cursor-not-allowed">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                            WhatsApp Belum Tersedia
                        </div>
                    @endif

                    <a href="/"
                       class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm text-white px-8 py-4 rounded-full font-semibold border-2 border-white/50 hover:bg-white/30 transition-all duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                        Kembali ke Beranda
                    </a>
                </div>

                <p class="mt-6 text-sm text-white/75">
                    ⚡ Respons cepat • 💯 Garansi kualitas • 💰 Harga terjangkau
                </p>
            </div>
        </div>
    </div>

</div>

@endsection