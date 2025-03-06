<!doctype html>

<html class="flex flex-col items-center">

<head>
    <title>Struudel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col justify-center items-center p-5 container w-full">

<a class="fixed top-5 left-5 px-3 py-2 border rounded bg-green-300 border border-green-800 text-green-800 cursor-pointer"
   href="{{ route('dashboard') }}">
    Ξ
</a>

{{ $slot }}

</body>

</html>
