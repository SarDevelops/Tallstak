<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body>
    <x-comman.toast />
    <x-comman.main_layout.nav_bar />
    <x-comman.main_layout.side_bar />
    <div class="p-4 sm:ml-64">
        <div class="p-4 rounded-lg dark:border-gray-700 mt-14">
            {{ $slot }}
        </div>
    </div>
    @livewireScripts
</body>

</html>
