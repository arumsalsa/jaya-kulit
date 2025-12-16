@extends('layouts.admin')

@section('content')
<h1 class="text-2xl font-bold mb-6">About Us</h1>

{{-- FORM ABOUT --}}
<form method="POST" action="/admin/about" class="bg-white p-6 rounded shadow mb-8">
    @csrf

    <label class="font-semibold">Cerita Toko</label>
    <textarea name="story" rows="5"
              class="w-full border p-2 mb-4">{{ $about->story ?? '' }}</textarea>

    <label class="font-semibold">Instagram</label>
    <input name="instagram"
           value="{{ $about->instagram ?? 'jaya_kulit' }}"
           class="w-full border p-2 mb-4">

    <label class="font-semibold">WhatsApp (628xxxx)</label>
    <input name="whatsapp"
           value="{{ $about->whatsapp ?? '' }}"
           class="w-full border p-2 mb-4">

    <button class="bg-brand text-white px-6 py-2 rounded">
        Simpan
    </button>
</form>

{{-- UPLOAD GALERI --}}
<form method="POST"
      action="/admin/about/gallery"
      enctype="multipart/form-data"
      class="bg-white p-6 rounded shadow">
    @csrf

    <label class="block font-semibold mb-3">
        Upload Foto Galeri (Drag & Drop / Multiple)
    </label>

    <div id="drop-area"
         class="border-2 border-dashed border-gray-300 rounded p-6 text-center cursor-pointer">
        <p class="text-gray-500">
            Drag & drop foto di sini atau klik untuk pilih
        </p>
        <input type="file"
               id="fileElem"
               name="images[]"
               multiple
               accept="image/*"
               class="hidden">
    </div>

    <div id="gallery-preview"
         class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-6"></div>

    <button type="submit"
            class="mt-6 bg-brand text-white px-6 py-2 rounded">
        Upload Semua Foto
    </button>
</form>

{{-- GALERI EXISTING --}}
<div class="grid grid-cols-4 gap-4 mt-8">
@foreach($galleries as $g)
    <div class="relative group">
        <img src="{{ asset('storage/'.$g->image) }}"
             class="rounded h-40 w-full object-cover">

        <form method="POST"
              action="/admin/about/gallery/{{ $g->id }}"
              class="absolute top-2 right-2 hidden group-hover:block">
            @csrf @method('DELETE')
            <button class="bg-red-600 text-white px-2 rounded">✕</button>
        </form>
    </div>
@endforeach
</div>

{{-- MODAL CROP --}}
<div id="crop-modal"
     class="fixed inset-0 bg-black/70 hidden flex items-center justify-center z-50">
    <div class="bg-white rounded w-[420px] p-4">
        <h2 class="font-bold mb-3 text-lg">Crop Foto</h2>

        {{-- WRAPPER WAJIB --}}
        <div class="w-full h-[300px] bg-gray-100 overflow-hidden">
            <img id="crop-image">
        </div>

        <div class="flex justify-end gap-3 mt-4">
            <button onclick="closeCrop()"
                    class="px-4 py-2 border rounded">
                Batal
            </button>
            <button onclick="saveCrop()"
                    class="px-4 py-2 bg-brand text-white rounded">
                Simpan Crop
            </button>
        </div>
    </div>
</div>


{{-- SCRIPT --}}
<script>
let files = [];
let cropper;
let currentIndex = null;

const dropArea = document.getElementById('drop-area');
const fileInput = document.getElementById('fileElem');
const preview = document.getElementById('gallery-preview');
const modal = document.getElementById('crop-modal');
const cropImage = document.getElementById('crop-image');

dropArea.onclick = () => fileInput.click();

dropArea.addEventListener('dragover', e => {
    e.preventDefault();
    dropArea.classList.add('bg-gray-100');
});

dropArea.addEventListener('dragleave', () => {
    dropArea.classList.remove('bg-gray-100');
});

dropArea.addEventListener('drop', e => {
    e.preventDefault();
    dropArea.classList.remove('bg-gray-100');
    handleFiles(e.dataTransfer.files);
});

fileInput.onchange = e => handleFiles(e.target.files);

function handleFiles(selectedFiles) {
    [...selectedFiles].forEach(file => {
        files.push(file);
        previewFile(file, files.length - 1);
    });
}

function previewFile(file, index) {
    const reader = new FileReader();
    reader.onload = e => {
        const box = document.createElement('div');
        box.className = 'relative group';

        const img = document.createElement('img');
        img.src = e.target.result;
        img.className = 'w-full h-40 object-cover rounded cursor-pointer';
        img.onclick = () => openCrop(index);

        const del = document.createElement('button');
        del.innerText = '✕';
        del.className = 'absolute top-2 right-2 bg-red-600 text-white px-2 rounded hidden group-hover:block';
        del.onclick = () => {
            files.splice(index, 1);
            box.remove();
            syncInput();
        };

        box.appendChild(img);
        box.appendChild(del);
        preview.appendChild(box);
    };
    reader.readAsDataURL(file);
}

function openCrop(index) {
    currentIndex = index;

    const reader = new FileReader();
    reader.onload = e => {
        cropImage.src = e.target.result;
        modal.classList.remove('hidden');

        if (cropper) {
            cropper.destroy();
        }

        cropper = new Cropper(cropImage, {
            aspectRatio: 1,
            viewMode: 1,
            dragMode: 'crop',
            autoCropArea: 1,
            responsive: true,
            background: false,
            modal: true,
            guides: true,
            highlight: false
        });
    };

    reader.readAsDataURL(files[index]);
}


function closeCrop() {
    modal.classList.add('hidden');
    cropper.destroy();
}

function saveCrop() {
    cropper.getCroppedCanvas({
        width: 600,
        height: 600,
    }).toBlob(blob => {

        const croppedFile = new File(
            [blob],
            files[currentIndex].name,
            { type: 'image/jpeg' }
        );

        files[currentIndex] = croppedFile;

        // 🔥 REFRESH PREVIEW
        const reader = new FileReader();
        reader.onload = e => {
            preview.children[currentIndex].querySelector('img').src = e.target.result;
        };
        reader.readAsDataURL(croppedFile);

        // 🔥 SYNC KE INPUT FILE
        const dataTransfer = new DataTransfer();
        files.forEach(f => dataTransfer.items.add(f));
        fileInput.files = dataTransfer.files;

        closeCrop();
    }, 'image/jpeg');
}

function syncInput() {
    const dataTransfer = new DataTransfer();
    files.forEach(f => dataTransfer.items.add(f));
    fileInput.files = dataTransfer.files;
}
</script>
@endsection
