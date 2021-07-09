<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Your Laravel App') }}</title>

        <!-- Font & Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-inter antialiased bg-gray-100 text-gray-600" x-data="{ page: 'dashboard', sidebarOpen: false }">
        <x-jet-banner />

        <div class="flex min-h-screen overflow-hidden">

            <!-- Sidebar -->
            <livewire:sidenav />

            <!-- Content area -->
            <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden">
            <!-- Top Heading -->
            <livewire:topheader />

            <!-- Page Heading -->
            {{--@if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif--}}

            <!-- Main Content -->
            <main>
                {{ $slot }}
            </main>

            </div>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
