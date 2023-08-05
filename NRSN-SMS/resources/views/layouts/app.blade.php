<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')
        <!-- Page Content -->
        <main>
            <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-gray-50 shadow-xl min-h-screen">

                    <!-- Page Heading -->
                    @if (isset($header))
                        <header class="pt-6 pb-6">
                            <div class="px-4 lg:px-8 text-4xl font-bold">
                                {{ $header }}
                            </div>
                        </header>
                    @endif

                    <!-- Main Content -->
                    {{ $slot }}

                </div>
            </div>
        </main>
    </div>
    @stack('modals')
    @livewireScripts
</body>

</html>
