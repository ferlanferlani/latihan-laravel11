<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- alpine js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- tailwind css --}}
    @vite('resources/css/app.css')
    {{-- font --}}
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>{{ $title }}</title>
</head>

<body class="h-full">
    <div class="min-h-full">
        {{-- navbar --}}
        <x-navbar></x-navbar>
        {{-- end navbar --}}

        {{-- header --}}
        <x-header>{{ $title }}</x-header>
        {{-- end header --}}

        {{-- main content --}}
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
        {{-- end main content --}}

    </div>
</body>

</html>
