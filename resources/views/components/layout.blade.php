<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'node_modules/flowbite/**/*.js'])

</head>

<body class="dark:bg-gray-900 antialiased">
    <header
        class="sticky top-0 z-40 flex-none w-full mx-auto bg-white border-b border-gray-200 dark:border-gray-600 dark:bg-gray-800">
        <x-nav>
            <x-nav-link :active="request()->is('/')" href="/">Home</x-nav-link>
            <x-nav-link :active="request()->is('companies')" href="/companies">Companies</x-nav-link>
        </x-nav>
    </header>


    <div class="w-full p-4 mx-auto max-w-screen-xl">
        {{ $slot }}
    </div>
    </div>
</body>

</html>
