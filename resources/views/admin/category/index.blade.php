@extends('layouts.admin')

@section('content')
<h1 class="text-2xl font-bold mb-4">Kategori Produk</h1>

<form method="POST" action="/admin/categories" class="flex gap-2 mb-6">
    @csrf
    <input type="text" name="name" placeholder="Nama kategori"
           class="border p-2 rounded w-64" required>
    <button class="bg-brand text-white px-4 rounded">Tambah</button>
</form>

<table class="w-full bg-white rounded shadow">
    <tr class="border-b">
        <th class="p-3 text-left">Nama</th>
        <th class="p-3">Aksi</th>
    </tr>

    @foreach($categories as $c)
    <tr class="border-b">
        <td class="p-3">{{ $c->name }}</td>
        <td class="p-3 text-center">
            <form method="POST" action="/admin/categories/{{ $c->id }}">
                @csrf @method('DELETE')
                <button class="text-red-600">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
