@extends('layouts.user')

@section('title', $product->name . ' - Jaya Kulit')

@section('content')

{{-- BREADCRUMB --}}
<div class="bg-gray-50 border-b">
    <div class="max-w-7xl mx-auto px-4 py-4">
        <nav class="flex items-center gap-2 text-sm">
            <a href="/" class="text-gray-500 hover:text-brand transition">Home</a>
            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
            <a href="/products" class="text-gray-500 hover:text-brand transition">Produk</a>
            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
            @if($product->category)
            <a href="/products?category={{ $product->category->id }}" class="text-gray-500 hover:text-brand transition">
                {{ $product->category->name }}
            </a>
            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
            @endif
            <span class="text-brand font-medium">{{ Str::limit($product->name, 30) }}</span>
        </nav>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 py-12">
    
    <div class="grid lg:grid-cols-2 gap-12 mb-16">
        
        {{-- IMAGE SECTION --}}
        <div class="space-y-4">
            {{-- Main Image --}}
            <div class="relative group bg-gray-50 rounded-3xl overflow-hidden shadow-2xl">
                @if($product->image)
                    <img src="{{ asset('storage/'.$product->image) }}"
                         alt="{{ $product->name }}"
                         class="w-full aspect-square object-cover">
                @else
                    <div class="w-full aspect-square bg-gradient-to-br from-amber-400 to-orange-500 flex items-center justify-center">
                        <svg class="w-32 h-32 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                @endif
                
                {{-- Zoom hint --}}
                <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-2 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition-opacity">
                    <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/>
                    </svg>
                </div>
            </div>

            {{-- Features Icons --}}
            <div class="grid grid-cols-3 gap-4">
                <div class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-2xl p-4 text-center border border-amber-100">
                    <div class="w-12 h-12 mx-auto mb-2 bg-gradient-to-br from-amber-400 to-orange-500 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <p class="text-xs font-semibold text-gray-700">100% Original</p>
                </div>
                
                <div class="bg-gradient-to-br from-blue-50 to-blue-50 rounded-2xl p-4 text-center border border-blue-100">
                    <div class="w-12 h-12 mx-auto mb-2 bg-gradient-to-br from-blue-400 to-blue-600 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                        </svg>
                    </div>
                    <p class="text-xs font-semibold text-gray-700">Handmade</p>
                </div>
                
                <div class="bg-gradient-to-br from-green-50 to-green-50 rounded-2xl p-4 text-center border border-green-100">
                    <div class="w-12 h-12 mx-auto mb-2 bg-gradient-to-br from-green-400 to-green-600 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <p class="text-xs font-semibold text-gray-700">Berkualitas</p>
                </div>
            </div>
        </div>

        {{-- PRODUCT INFO SECTION --}}
        <div class="space-y-6">
            
            {{-- Category Badge --}}
            @if($product->category)
            <div class="inline-flex items-center gap-2 bg-amber-100 text-amber-800 px-4 py-2 rounded-full text-sm font-semibold">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                </svg>
                {{ $product->category->name }}
            </div>
            @endif

            {{-- Product Name --}}
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight">
                {{ $product->name }}
            </h1>


            {{-- Price --}}
            <div class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-2xl p-6 border-2 border-amber-200">
                <div class="flex items-baseline gap-3">
                    <span class="text-sm text-gray-600 font-medium">Harga</span>
                    <span class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-amber-600 to-orange-600">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </span>
                </div>
            </div>

            {{-- Description --}}
            <div class="bg-white rounded-2xl border border-gray-200 p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-3 flex items-center gap-2">
                    <svg class="w-5 h-5 text-brand" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Deskripsi Produk
                </h3>
                <p class="text-gray-700 leading-relaxed">
                    {{ $product->description }}
                </p>
            </div>

            {{-- Product Details --}}
            <div class="bg-gray-50 rounded-2xl p-6 space-y-3">
                <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
                    <svg class="w-5 h-5 text-brand" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                    Detail Produk
                </h3>
                <div class="space-y-2">
                    <div class="flex items-center justify-between py-2 border-b border-gray-200">
                        <span class="text-gray-600">Kondisi</span>
                        <span class="font-semibold text-gray-900">Baru</span>
                    </div>
                    <div class="flex items-center justify-between py-2 border-b border-gray-200">
                        <span class="text-gray-600">Berat</span>
                        <span class="font-semibold text-gray-900">± 500 gram</span>
                    </div>
                    @if($product->category)
                    <div class="flex items-center justify-between py-2 border-b border-gray-200">
                        <span class="text-gray-600">Kategori</span>
                        <span class="font-semibold text-gray-900">{{ $product->category->name }}</span>
                    </div>
                    @endif
                    <div class="flex items-center justify-between py-2">
                        <span class="text-gray-600">Material</span>
                        <span class="font-semibold text-gray-900">Kulit Asli</span>
                    </div>
                </div>
            </div>

            {{-- Actions --}}
            <div class="space-y-3 pt-4">
                {{-- Add to Cart --}}
                <form method="POST" action="/cart/add/{{ $product->id }}" id="addToCartForm">
                    @csrf
                    <button type="button"
                            onclick="addToCart({{ $product->id }})"
                            class="group w-full bg-gradient-to-r from-amber-500 to-orange-600 text-white px-8 py-4 rounded-xl font-bold text-lg shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300 flex items-center justify-center gap-3">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        <span>Tambah ke Keranjang</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </button>
                </form>

                {{-- WhatsApp Button --}}
                @php
                    $waText = urlencode("Halo, saya tertarik dengan produk: ".$product->name." - Rp ".number_format($product->price, 0, ',', '.'));
                @endphp

                <a href="https://wa.me/1234567890?text={{ $waText }}"
                   target="_blank"
                   class="group w-full bg-gradient-to-r from-green-500 to-green-600 text-white px-8 py-4 rounded-xl font-bold text-lg shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300 flex items-center justify-center gap-3">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                    </svg>
                    <span>Pesan via WhatsApp</span>
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>

                {{-- Share Button --}}
                <button onclick="shareProduct()"
                        class="w-full bg-gray-100 hover:bg-gray-200 text-gray-700 px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 flex items-center justify-center gap-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                    </svg>
                    <span>Bagikan Produk</span>
                </button>
            </div>

        </div>
    </div>

    {{-- RELATED PRODUCTS --}}
    @if(isset($relatedProducts) && $relatedProducts->count() > 0)
    <div class="mt-20">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-2">Produk Terkait</h2>
                <p class="text-gray-600">Produk lain yang mungkin Anda suka</p>
            </div>
            <a href="/products" class="text-brand font-semibold hover:underline flex items-center gap-2">
                <span>Lihat Semua</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @foreach($relatedProducts as $related)
            <a href="/products/{{ $related->id }}" 
               class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden hover:-translate-y-2">
                <div class="relative overflow-hidden aspect-square bg-gray-100">
                    @if($related->image)
                        <img src="{{ asset('storage/'.$related->image) }}"
                             alt="{{ $related->name }}"
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    @else
                        <div class="w-full h-full bg-gradient-to-br from-amber-400 to-orange-500 flex items-center justify-center">
                            <span class="text-white text-2xl font-bold">
                                {{ strtoupper(substr($related->name, 0, 1)) }}
                            </span>
                        </div>
                    @endif
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-gray-900 group-hover:text-brand transition-colors line-clamp-1 mb-2">
                        {{ $related->name }}
                    </h3>
                    <p class="text-brand font-bold text-lg">
                        Rp {{ number_format($related->price, 0, ',', '.') }}
                    </p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
    @endif

</div>

<script>
function shareProduct() {
    if (navigator.share) {
        navigator.share({
            title: '{{ $product->name }}',
            text: 'Lihat produk ini: {{ $product->name }} - Rp {{ number_format($product->price, 0, ",", ".") }}',
            url: window.location.href
        }).catch(err => console.log('Error sharing:', err));
    } else {
        // Fallback: copy to clipboard
        navigator.clipboard.writeText(window.location.href);
        alert('Link produk telah disalin!');
    }
}
</script>

@endsection