<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Pocket Pulse') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="font-sans antialiased bg-gray-50 text-gray-900 dark:bg-gray-900 dark:text-gray-100">

    {{-- Header --}}
    <header class="py-10">
        <div class="w-full max-w-7xl mx-auto px-6 flex justify-between items-center">
            <livewire:layout.header />
        </div>
    </header>

    {{-- Main --}}
    <main class="w-full max-w-7xl mx-auto px-6 py-6 min-h-screen">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="w-full max-w-7xl mx-auto px-6 py-10">
        @livewire('layout.footer')
    </footer>

    @livewireScripts
    @stack('scripts')

</body>

</html>
