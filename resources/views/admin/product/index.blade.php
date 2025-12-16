@extends('layouts.admin')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold">Admin - Produk</h1>

    <a href="/admin/products/create"
       class="bg-brand text-white px-4 py-2 rounded flex items-center gap-2 hover:bg-brand/90">
        <span class="text-lg">＋</span>
        Tambah Produk
    </a>
</div>

<div class="bg-white rounded shadow overflow-x-auto">
    <table class="w-full border-collapse">
        <thead class="bg-brand text-white">
            <tr>
                <th class="p-3 text-left">Gambar</th>
                <th class="p-3 text-left">Nama</th>
                <th class="p-3 text-left">Kategori</th>
                <th class="p-3 text-left">Harga</th>
                <th class="p-3 text-center">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse($products as $product)
            <tr class="border-b hover:bg-gray-50">

                {{-- Gambar --}}
                <td class="p-3">
                    @if($product->image)
                        <img src="{{ asset('storage/'.$product->image) }}"
                             class="w-16 h-16 object-cover rounded">
                    @else
                        <div class="w-16 h-16 bg-gray-200 flex items-center justify-center rounded text-xs">
                            No Image
                        </div>
                    @endif
                </td>

                {{-- Nama --}}
                <td class="p-3 font-medium">
                    {{ $product->name }}
                </td>

                {{-- Kategori --}}
                <td class="p-3">
                    {{ $product->category->name ?? '-' }}
                </td>

                {{-- Harga --}}
                <td class="p-3 font-semibold text-brand">
                    Rp {{ number_format($product->price, 0, ',', '.') }}
                </td>

                {{-- Aksi --}}
                <td class="p-3 text-center align-middle">
    <div class="flex justify-center items-center gap-3">

        {{-- EDIT --}}
        <a href="/admin/products/{{ $product->id }}/edit"
           title="Edit"
           class="p-2 rounded hover:bg-gray-100 text-blue-600 hover:text-blue-800">
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="w-5 h-5"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke-width="1.8"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M16.862 3.487a2.25 2.25 0 113.182 3.182L7.125 19.588
                         3 21l1.412-4.125L16.862 3.487z" />
            </svg>
        </a>

        {{-- HAPUS --}}
        <form method="POST"
              action="/admin/products/{{ $product->id }}"
              onsubmit="return confirm('Hapus produk ini?')">
            @csrf
            @method('DELETE')

            <button type="submit"
                    title="Hapus"
                    class="p-2 rounded hover:bg-gray-100 text-red-600 hover:text-red-800">
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-5 h-5"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke-width="1.8"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21
                             c.342.052.682.107 1.022.166m-1.022-.165
                             L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084
                             a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0
                             a48.108 48.108 0 00-3.478-.397m-12 .562
                             c.34-.059.68-.114 1.022-.165m0 0
                             a48.11 48.11 0 013.478-.397m7.5 0v-.916
                             c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0
                             00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916" />
                </svg>
            </button>
        </form>

    </div>
</td>

            </tr>
            @empty
            <tr>
                <td colspan="5" class="p-6 text-center text-gray-500">
                    Belum ada produk
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
