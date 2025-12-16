@extends('layouts.user')

@section('title', 'Keranjang Belanja - Jaya Kulit')

@section('content')

{{-- HERO BANNER --}}
<section class="relative h-48 bg-gradient-to-br from-amber-500 via-orange-500 to-orange-600">
    <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 h-full flex items-center">
        <div class="text-white">
            <h1 class="text-4xl font-bold mb-2">Keranjang Belanja</h1>
            <p class="text-lg text-white/90">Tinjau pesanan Anda sebelum checkout</p>
        </div>
    </div>
</section>

<div class="max-w-7xl mx-auto px-4 py-12">

@if(empty($cart))
    {{-- EMPTY CART STATE --}}
    <div class="max-w-2xl mx-auto">
        <div class="bg-white rounded-3xl shadow-xl p-12 text-center">
            {{-- Empty Cart Icon --}}
            <div class="w-32 h-32 mx-auto mb-6 bg-gradient-to-br from-gray-100 to-gray-200 rounded-full flex items-center justify-center">
                <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg>
            </div>

            <h2 class="text-3xl font-bold text-gray-900 mb-4">Keranjang Masih Kosong</h2>
            <p class="text-gray-600 text-lg mb-8">Yuk, mulai belanja produk kulit berkualitas kami!</p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/products" 
                   class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-amber-500 to-orange-600 text-white px-8 py-4 rounded-xl font-semibold shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                    </svg>
                    <span>Mulai Belanja</span>
                </a>

                <a href="/" 
                   class="inline-flex items-center justify-center gap-2 bg-gray-100 hover:bg-gray-200 text-gray-700 px-8 py-4 rounded-xl font-semibold transition-all duration-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    <span>Kembali ke Beranda</span>
                </a>
            </div>
        </div>
    </div>

@else
    @php 
        $total = 0; 
        $waText = "Halo, saya ingin memesan:\n\n"; 
    @endphp

    <div class="grid lg:grid-cols-3 gap-8">
        
        {{-- CART ITEMS --}}
        <div class="lg:col-span-2 space-y-4">
            <div class="bg-white rounded-2xl shadow-lg p-6">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold text-gray-900 flex items-center gap-2">
                        <svg class="w-6 h-6 text-brand" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        Item Keranjang
                    </h2>
                    <span class="px-4 py-2 bg-amber-100 text-amber-800 rounded-full text-sm font-semibold">
                        {{ count($cart) }} Item
                    </span>
                </div>

                <div class="space-y-4">
                    @foreach($cart as $id => $item)
                        @php
                            $subtotal = $item['price'] * $item['qty'];
                            $total += $subtotal;
                            $waText .= "• {$item['name']} ({$item['qty']}x) - Rp ".number_format($item['price'], 0, ',', '.')."\n";
                        @endphp

                        <div class="group flex gap-4 bg-gradient-to-br from-gray-50 to-white p-5 rounded-2xl border border-gray-200 hover:border-brand hover:shadow-lg transition-all duration-300">
                            
                            {{-- Product Image --}}
                            <div class="relative flex-shrink-0">
                                <div class="w-24 h-24 rounded-xl overflow-hidden bg-gray-100">
                                    @if($item['image'])
                                        <img src="{{ asset('storage/'.$item['image']) }}"
                                             alt="{{ $item['name'] }}"
                                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                    @else
                                        <div class="w-full h-full bg-gradient-to-br from-amber-400 to-orange-500 flex items-center justify-center">
                                            <span class="text-white text-xl font-bold">
                                                {{ strtoupper(substr($item['name'], 0, 1)) }}
                                            </span>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            {{-- Product Info --}}
                            <div class="flex-1 min-w-0">
                                <h3 class="font-bold text-lg text-gray-900 mb-2 group-hover:text-brand transition-colors">
                                    {{ $item['name'] }}
                                </h3>
                                
                                <div class="flex items-center gap-4 text-sm text-gray-600 mb-3">
                                    <span class="flex items-center gap-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                                        </svg>
                                        Kulit Asli
                                    </span>
                                    <span class="flex items-center gap-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                                        </svg>
                                        Qty: {{ $item['qty'] }}
                                    </span>
                                </div>

                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-xs text-gray-500 mb-1">Subtotal</p>
                                        <p class="text-xl font-bold text-brand">
                                            Rp {{ number_format($subtotal, 0, ',', '.') }}
                                        </p>
                                    </div>

                                    {{-- Remove Button --}}
                                    <form method="POST" action="/cart/remove/{{ $id }}" onsubmit="return confirm('Hapus item ini dari keranjang?')">
                                        @csrf
                                        <button type="submit" 
                                                class="flex items-center gap-2 px-4 py-2 bg-red-50 hover:bg-red-100 text-red-600 rounded-lg font-semibold text-sm transition-all duration-300 hover:shadow-md">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                            <span>Hapus</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Continue Shopping --}}
                <div class="mt-6 pt-6 border-t border-gray-200">
                    <a href="/products" 
                       class="inline-flex items-center gap-2 text-brand font-semibold hover:gap-4 transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                        <span>Lanjut Belanja</span>
                    </a>
                </div>
            </div>
        </div>

        {{-- ORDER SUMMARY --}}
        <div class="lg:col-span-1 space-y-6">
            <div class="bg-white rounded-2xl shadow-xl p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center gap-2">
                    <svg class="w-6 h-6 text-brand" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                    Ringkasan Pesanan
                </h3>

                <div class="space-y-3 mb-6">
                    <div class="flex justify-between text-gray-600">
                        <span>Subtotal ({{ count($cart) }} item)</span>
                        <span class="font-semibold">Rp {{ number_format($total, 0, ',', '.') }}</span>
                    </div>
                    
                    <div class="flex justify-between text-gray-600">
                        <span>Diskon</span>
                        <span class="font-semibold text-green-600">-</span>
                    </div>

                    <div class="pt-3 border-t border-gray-200">
                        <div class="flex justify-between items-center">
                            <span class="text-lg font-bold text-gray-900">Total</span>
                            <span class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-amber-600 to-orange-600">
                                Rp {{ number_format($total, 0, ',', '.') }}
                            </span>
                        </div>
                    </div>
                </div>

                {{-- Promo Code (Optional) --}}
                <div class="mb-6 p-4 bg-gradient-to-br from-amber-50 to-orange-50 rounded-xl border border-amber-200">
                    <p class="text-sm text-gray-700 flex items-start gap-2">
                        <svg class="w-5 h-5 text-amber-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span>Pesanan akan dikonfirmasi via WhatsApp</span>
                    </p>
                </div>

                {{-- WhatsApp Checkout Button --}}
                @php
                    $waText .= "\n*Total: Rp ".number_format($total, 0, ',', '.')."*\n\nTerima kasih!";
                    $waText = urlencode($waText);
                @endphp

                <a href="https://wa.me/6282141103094?text={{ $waText }}"
                   target="_blank"
                   class="group block w-full bg-gradient-to-r from-green-500 to-green-600 text-white py-4 rounded-xl font-bold text-lg text-center shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300 mb-3">
                    <span class="flex items-center justify-center gap-3">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                        </svg>
                        <span>Pesan via WhatsApp</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </span>
                </a>

                {{-- Security Badges --}}
                <div class="grid grid-cols-3 gap-2">
                    <div class="text-center p-2 bg-gray-50 rounded-lg">
                        <svg class="w-6 h-6 mx-auto mb-1 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                        <p class="text-xs text-gray-600 font-medium">Aman</p>
                    </div>
                    <div class="text-center p-2 bg-gray-50 rounded-lg">
                        <svg class="w-6 h-6 mx-auto mb-1 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <p class="text-xs text-gray-600 font-medium">Original</p>
                    </div>
                    <div class="text-center p-2 bg-gray-50 rounded-lg">
                        <svg class="w-6 h-6 mx-auto mb-1 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <p class="text-xs text-gray-600 font-medium">Cepat</p>
                    </div>
                </div>
            </div>

            {{-- Help Section --}}
            <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-6 border border-blue-200">
                <div class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-blue-600 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <div>
                        <h4 class="font-bold text-gray-900 mb-2">Butuh Bantuan?</h4>
                        <p class="text-sm text-gray-700 mb-3">Hubungi kami jika ada pertanyaan tentang pesanan Anda</p>
                        <a href="https://wa.me/6282141103094?text=Halo, saya butuh bantuan"
                           target="_blank"
                           class="inline-flex items-center gap-2 text-blue-600 font-semibold text-sm hover:underline">
                            <span>Chat Sekarang</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endif

</div>

@endsection