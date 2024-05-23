<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Askbootstrap">
    <meta name="author" content="Askbootstrap">
    <title>project x</title>

    <link rel="icon" type="image/png" href="img/favicon.png">

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('assets/css/osahan.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css') }}">
</head>

<body id="page-top">
    {{-- <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ __("You're logged in!") }}
                        <h1>This is General User dashboard!</h1>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout> --}}
    {{-- //navbar --}}
    @include('client.components.navbar')
    @include('client.components.sidebar')


    @yield('content')



    @include('client.components.footer')

    <script data-cfasync="false"
        src="{{ asset('assets/js/email-decode.min.js') }}"></script>
    <script src="{{ asset('assets/js.jquery.min.js') }}" type="310bf9012176813d10c747da-text/javascript"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" type="310bf9012176813d10c747da-text/javascript"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="{{ asset('assets/js/jquery.easing.min.js') }}" type="310bf9012176813d10c747da-text/javascript"></script>

    <script src="{{ asset('assets/js/owl.carousel.js') }}" type="310bf9012176813d10c747da-text/javascript"></script>

    <script src="{{ asset('assets/js/custom.js') }}" type="310bf9012176813d10c747da-text/javascript"></script>
    <script src="{{ asset('assets/js/rocket-loader.min.js') }}"
        data-cf-settings="310bf9012176813d10c747da-|49" defer></script>
    <script defer
        src="../../../static.cloudflareinsights.com/beacon.min.js/v55bfa2fee65d44688e90c00735ed189a1713218998793"
        integrity="sha512-FIKRFRxgD20moAo96hkZQy/5QojZDAbyx0mQ17jEGHCJc/vi0G2HXLtofwD7Q3NmivvP9at5EVgbRqOaOQb+Rg=="
        data-cf-beacon='{"rayId":"878f764d7e9723e2","r":1,"version":"2024.3.0","token":"dd471ab1978346bbb991feaa79e6ce5c"}'
        crossorigin="anonymous"></script>

        <script>
            $(document).ready(function(){
                $('.toggle-list').click(function(){
                    $(this).next('.type-list').slideToggle();
                });
            });
        </script>
</body>



</html>
