@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-10">
    <h1 class="text-2xl font-bold mb-4">Edit Produk</h1>

    <form action="/admin/products/{{ $product->id }}" method="POST"
      enctype="multipart/form-data"
      class="bg-white p-6 rounded shadow max-w-xl">
    @csrf
    @method('PUT')

    <input name="name" value="{{ $product->name }}"
           class="w-full border p-2 mb-3">

    <select name="category_id" class="border p-2 w-full mb-3">
    <option value="">-- Pilih Kategori --</option>
    @foreach ($categories as $c)
        <option value="{{ $c->id }}">
            {{ $c->name }}
        </option>
    @endforeach
</select>

    <textarea name="description"
              class="w-full border p-2 mb-3">{{ $product->description }}</textarea>

    <input name="price" value="{{ $product->price }}"
           class="w-full border p-2 mb-3">

           <label class="flex items-center gap-2 mb-4">
    <input type="checkbox" name="is_featured" value="1">
    Produk Unggulan
</label>

    {{-- Upload baru --}}
    <input type="file" name="image"
           class="w-full border p-2 mb-3"
           accept="image/*"
           onchange="previewImage(event)">

    {{-- Gambar lama --}}
    @if($product->image)
        <img src="{{ asset('storage/'.$product->image) }}"
             class="w-40 rounded mb-3">
    @endif

    {{-- Preview baru --}}
    <img id="preview" class="w-40 hidden rounded mb-3">

    <button class="bg-brand text-white px-4 py-2 rounded">
        Update Produk
    </button>
</form>

<script>
function previewImage(event) {
    const img = document.getElementById('preview');
    img.src = URL.createObjectURL(event.target.files[0]);
    img.classList.remove('hidden');
}
</script>

</div>
@endsection
