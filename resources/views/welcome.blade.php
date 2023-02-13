<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

        <!-- Fonts -->
        

        <!-- Styles -->
        <style>
            body{
                overflow-x:hidden;
            }
        </style>
        @vite(['resources/css/app.css','resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="antialiased h-full">
        <div class="container-fluid min-h-screen block">
            <div class="">
                <x-navbar />
            </div>
            <div class="mt-5">
                @yield('content')
            </div>
            <div class=""></div>
        </div>

        @livewireScripts
    </body>
</html>
