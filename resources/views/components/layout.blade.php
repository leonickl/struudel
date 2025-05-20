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
    @auth
        <a href="{{ route('dashboard') }}"
        class="fixed top-4 left-4 z-50 inline-flex items-center justify-center w-11 h-11 rounded-full bg-green-500 dark:bg-green-600 text-white shadow-lg hover:bg-green-600 dark:hover:bg-green-700 transition focus:outline-none focus:ring-2 focus:ring-green-300 dark:focus:ring-green-800"
        title="Dashboard">
            <!-- Heroicon: Home -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l9-9 9 9M4 10v10a1 1 0 001 1h6m8-11v10a1 1 0 01-1 1h-6m-6 0h6" />
            </svg>
        </a>
    @endauth


    <!-- Page Content -->
    {{ $slot }}

</body>
</html>
