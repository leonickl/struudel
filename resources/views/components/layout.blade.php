<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-gray-100">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Struudel</title>
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen flex flex-col items-center justify-start p-4 sm:p-6 lg:p-8">

    <!-- Floating Dashboard Link -->
    <a href="{{ route('dashboard') }}"
       class="fixed top-4 left-4 z-50 px-3 py-2 rounded-md bg-green-500 dark:bg-green-600 text-white font-semibold border border-green-700 dark:border-green-800 shadow hover:bg-green-600 dark:hover:bg-green-700 transition">
        Ξ
    </a>

    <!-- Page Content -->
    {{ $slot }}

</body>
</html>
