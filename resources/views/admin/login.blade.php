<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin - Jaya Kulit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-brand min-h-screen flex items-center justify-center">

    <div class="bg-white w-full max-w-md p-8 rounded shadow">
        <h1 class="text-2xl font-bold text-center text-brand mb-6">
            Login Admin
        </h1>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 mb-4 rounded">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="/admin/login">
    @csrf

    <div class="mb-4">
        <label class="block mb-1 font-semibold">Username</label>
        <input type="text" name="name"
               class="w-full border rounded p-2"
               required autofocus>
    </div>

    <div class="mb-6">
        <label class="block mb-1 font-semibold">Password</label>
        <input type="password" name="password"
               class="w-full border rounded p-2"
               required>
    </div>

    <button type="submit"
            class="w-full bg-brand text-white py-2 rounded font-semibold">
        Login
    </button>
</form>


        <p class="text-center text-sm text-gray-500 mt-4">
            © {{ date('Y') }} Jaya Kulit
        </p>
    </div>

</body>
</html>
