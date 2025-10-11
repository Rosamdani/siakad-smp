<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @vite('resources/css/app.css')
        @livewireStyles
        @stack('styles')
    </head>
    <body class="bg-neutral-50 font-sans text-neutral-900 antialiased">
        <x-navbar />
        <main class="pt-20 md:pt-20">
            {{ $slot }}
        </main>
        <livewire:footer />
        @livewireScripts
        @stack('scripts')
    </body>
</html>
