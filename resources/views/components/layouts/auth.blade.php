<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Login' }}</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>
    <div class="flex justify-center min-h-screen text-gray-900 bg-gray-100">
        <div class="flex justify-center flex-1 max-w-screen-xl m-0 bg-white shadow dark:bg-gray-800 dark:text-white ">
            <div class="p-6 lg:w-1/2 xl:w-5/12 sm:p-12">
                <x-comman.theme_mode />
                <div>
                    <img src="https://storage.googleapis.com/devitary-image-host.appspot.com/15846435184459982716-LogoMakr_7POjrN.png"
                        class="w-32 mx-auto" />
                </div> {{ $slot }}

            </div>

            <div class="flex-1 hidden text-center bg-indigo-100 lg:flex">
                <div class="w-full m-12 bg-center bg-no-repeat bg-contain xl:m-16"
                    style="background-image: url('https://storage.googleapis.com/devitary-image-host.appspot.com/15848031292911696601-undraw_designer_life_w96d.svg');">
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
</body>
</html>
