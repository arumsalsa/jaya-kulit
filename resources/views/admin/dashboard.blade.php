@extends('layouts.admin')

@section('content')
<h1 class="text-2xl font-bold mb-6">Dashboard</h1>

<div class="grid md:grid-cols-3 gap-6">

    {{-- Card Produk --}}
    <div class="bg-white p-6 rounded shadow">
        <div class="flex items-center gap-4">
            <div class="bg-brand text-white p-3 rounded-full">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M20 13V7a2 2 0 00-2-2H6a2 2 0 00-2 2v6m16 0l-8 5-8-5"/>
                </svg>
            </div>
            <div>
                <p class="text-gray-500 text-sm">Total Produk</p>
                <p class="text-2xl font-bold">{{ $totalProducts }}</p>
            </div>
        </div>
    </div>

    {{-- Card Service --}}
    <div class="bg-white p-6 rounded shadow">
        <div class="flex items-center gap-4">
            <div class="bg-brand text-white p-3 rounded-full">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M14.7 6.3a1 1 0 010 1.4L8.4 14l-2.4.6.6-2.4 6.3-6.3a1 1 0 011.4 0z"/>
                </svg>
            </div>
            <div>
                <p class="text-gray-500 text-sm">Layanan</p>
                <p class="text-2xl font-bold">Reparasi Kulit</p>
            </div>
        </div>
    </div>

    {{-- Card WhatsApp --}}
    <div class="bg-white p-6 rounded shadow">
        <div class="flex items-center gap-4">
            <div class="bg-brand text-white p-3 rounded-full">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M16.7 13.4a5 5 0 10-2.3 2.3l3.6 1-1-3.6z"/>
                </svg>
            </div>
            <div>
                <p class="text-gray-500 text-sm">Order</p>
                <p class="text-2xl font-bold">Via WhatsApp</p>
            </div>
        </div>
    </div>

</div>
@endsection
