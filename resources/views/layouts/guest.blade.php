<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Novotel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        @include('layouts.header.header')
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <a href="/">
                    <div class="logo_row flex items-center gap-x-4">
                         <div class="logo_img">
                            <svg width="30" height="40" viewBox="0 0 30 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.474 1.48017C12.0035 3.6732 12.1012 3.38256 12.1012 11.5178C12.1012 15.0772 12.1563 17.9892 12.2238 17.9892C12.4782 17.9892 16.046 15.7619 16.5493 15.2885C16.8387 15.0166 17.269 14.3955 17.5054 13.9087C17.9035 13.0893 17.931 12.5374 17.8759 6.51165L17.8163 0L15.474 1.48017ZM1.46841e-05 17.22C0.000687047 20.5718 0.101543 23.6962 0.224361 24.1629C0.561215 25.4438 1.68989 26.6037 3.88246 27.9227C4.97079 28.5773 5.90359 29.1129 5.95558 29.1129C6.00735 29.1129 6.04994 26.2494 6.04994 22.7497V16.3864L5.43361 15.1448C4.89482 14.0595 4.54945 13.7302 2.68812 12.5272C1.51709 11.7703 0.433017 11.1453 0.278822 11.1384C0.0616487 11.1285 -0.00110592 12.4948 1.46841e-05 17.22ZM23.981 17.1017C23.9821 23.4233 24.1056 24.4583 25.0077 25.7209C25.4216 26.3005 28.6826 28.5525 29.8684 29.0781C29.9719 29.1241 30.0257 26.1337 29.9879 22.4333L29.9188 15.7051L29.3274 14.7619C28.9139 14.1023 28.0938 13.414 26.5991 12.4723C25.4239 11.7315 24.3537 11.1256 24.221 11.1256C24.0549 11.1256 23.9801 12.9899 23.981 17.1017ZM15.9113 23.2084C14.8635 23.8519 13.7144 24.6684 13.3579 25.0227C12.1649 26.2078 12.1012 26.643 12.1012 33.6022C12.1012 37.1211 12.164 40 12.2404 40C12.317 40 13.2808 39.4507 14.3823 38.7795C16.5218 37.4754 17.6278 36.3107 17.8246 35.1543C17.8916 34.7605 17.9172 31.6482 17.8813 28.238L17.8163 22.038L15.9113 23.2084Z" fill="#2F7BEB"/>
                            </svg>
                         </div>
                         <div class="title">
                            <h1 class="text-2xl font-medium leading-normal font-sans ">Novotel</h1>
                         </div>
                    </div>
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
