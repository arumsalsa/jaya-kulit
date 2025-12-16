<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Jaya Kulit</title>
    @vite('../resources/css/app.css')
    <link rel="stylesheet" href="https://unpkg.com/cropperjs/dist/cropper.css">
<script src="https://unpkg.com/cropperjs/dist/cropper.js"></script>
</head>
<body class="bg-gray-100">

<div class="flex min-h-screen">

    {{-- SIDEBAR --}}
    <aside class="w-64 bg-brand text-white">
        <div class="p-6 text-xl font-bold border-b border-white/20">
            Admin Jaya Kulit
        </div>

        <nav class="p-4 space-y-2">

    {{-- Dashboard --}}
    <a href="/admin/dashboard"
       class="flex items-center gap-3 p-3 rounded hover:bg-white/20
       {{ request()->is('admin/dashboard') ? 'bg-white/20' : '' }}">
        {{-- Icon Dashboard --}}
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3"/>
        </svg>
        <span>Dashboard</span>
    </a>

    {{-- Produk --}}
    <a href="/admin/products"
       class="flex items-center gap-3 p-3 rounded hover:bg-white/20
       {{ request()->is('admin/products*') ? 'bg-white/20' : '' }}">
        {{-- Icon Box --}}
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M20 13V7a2 2 0 00-2-2H6a2 2 0 00-2 2v6m16 0l-8 5-8-5m16 0v6a2 2 0 01-2 2H6a2 2 0 01-2-2v-6"/>
        </svg>
        <span>Produk</span>
    </a>


    {{-- KATEGORI (INI YANG BARU) --}}
    <a href="/admin/categories"
       class="flex items-center gap-3 p-3 rounded hover:bg-white/20
       {{ request()->is('admin/categories*') ? 'bg-white/20' : '' }}">
        {{-- Icon Folder --}}
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M3 7a2 2 0 012-2h5l2 2h7a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V7z"/>
        </svg>
        <span>Kategori</span>
    </a>

    {{-- About Us --}}
<a href="/admin/about"
   class="flex items-center gap-3 p-3 rounded hover:bg-white/20
   {{ request()->is('admin/about*') ? 'bg-white/20' : '' }}">
    {{-- Icon Info --}}
    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
         viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 100 20 10 10 0 000-20z"/>
    </svg>
    <span>About Us</span>
</a>

    {{-- Website --}}
    <a href="/"
       target="_blank"
       class="flex items-center gap-3 p-3 rounded hover:bg-white/20">
        {{-- Icon Globe --}}
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 2a10 10 0 100 20 10 10 0 000-20zm0 0c2.5 2.7 4 6.5 4 10s-1.5 7.3-4 10c-2.5-2.7-4-6.5-4-10s1.5-7.3 4-10z"/>
        </svg>
        <span>Lihat Website</span>
    </a>

</nav>

        <form method="POST" action="/admin/logout">
    @csrf
    <button class="w-full bg-red-600 text-white py-2 rounded">
        Logout
    </button>
</form>


    </aside>

    {{-- CONTENT --}}
    <main class="flex-1 p-6">
        @yield('content')
    </main>

</div>

</body>
</html>
