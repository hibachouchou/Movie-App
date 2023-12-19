<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <title>Movie App</title>
        <!-- Fonts -->
        <!-- Styles -->
        @vite(['resources/css/app.css','resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans bg-gray-900 text-white">
     <div>
 <!--Navbar Section-->
@include('includes.navbar')
<!---->       
<!-- Content Section -->
@yield('content')
<!---->
<!--Footer Section-->
@include('includes.footer')
<!---->
     </div>
     @livewireScripts
     <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    </body>
</html>
