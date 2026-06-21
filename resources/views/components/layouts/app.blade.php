<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? 'Розумний рибак' }}</title>
        <meta
            name="description"
            content="Розумний рибак — AI-помічник, який допомагає рибалкам підбирати місце, час і наживку під конкретні умови."
        >

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=manrope:400,500,600,700,800|fraunces:600,700&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-[var(--color-ocean-950)] text-slate-100 antialiased">
        <div class="pointer-events-none fixed inset-0 -z-10 overflow-hidden">
            <div class="absolute inset-x-0 top-[-12rem] mx-auto h-80 w-[44rem] rounded-full bg-cyan-400/20 blur-3xl"></div>
            <div class="absolute right-[-8rem] top-1/3 h-72 w-72 rounded-full bg-emerald-300/10 blur-3xl"></div>
            <div class="absolute bottom-[-10rem] left-[-6rem] h-80 w-80 rounded-full bg-amber-200/10 blur-3xl"></div>
        </div>

        @if (session('status'))
            <div class="mx-auto max-w-6xl px-4 pt-6 sm:px-6 lg:px-8">
                <div class="rounded-2xl border border-emerald-300/30 bg-emerald-400/10 px-4 py-3 text-sm text-emerald-100">
                    {{ session('status') }}
                </div>
            </div>
        @endif

        {{ $slot }}
    </body>
</html>
