<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PKL') }} @yield('title')</title>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <!-- Styles -->
    <style>
        [x-cloak] {
            display: none;
        }

       
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased">
  
    <div x-data="mainState" :class="{ dark: isDarkMode }" x-on:resize.window="handleWindowResize" x-cloak>
        <div class="min-h-screen text-gray-900 bg-gray-100 dark:bg-dark-eval-0 dark:text-gray-200">
            <!-- Sidebar -->
            <x-sidebar.sidebar />
            {{-- alert --}}

            <!-- Page Wrapper -->
            <div class="flex flex-col min-h-screen" :class="{
                    'lg:ml-64': isSidebarOpen,
                    'md:ml-16': !isSidebarOpen
                }" style="transition-property: margin; transition-duration: 150ms;">

                <!-- Navbar -->
                <x-navbar />

                <!-- Page Heading -->
                <header>
                    <div class="p-4 sm:p-6">
                        {{ $header }}
                    </div>
                </header>

                <!-- Page Content -->
              
                <main class="px-4 sm:px-6 flex-1">
                    <x-units.alert />
                    <div id="loading" class=" w-20 h-20 left-0 top-0 bg-transparent bg-opacity-70 z-50 flex items-center justify-center ">
                        <img src="{{ asset('landingpage/loading.gif') }}" class="" alt="Loading...">
                    </div>
                    {{ $slot }}
                </main>
                <!-- Page Footer -->
                <x-footer />
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
              document.addEventListener('DOMContentLoaded', function() {
            // Event handler for anchor clicks
            document.addEventListener('click', function(event) {
                var target = event.target;
                while (target && target.tagName !== 'A') {
                    target = target.parentNode;
                }
                if (target && target.tagName === 'A' && !target.getAttribute('target')) {
                    document.getElementById('loading').style.display = 'flex';
                }
            });

            // Hide loading screen when window finishes loading
            window.addEventListener('load', function() {
                document.getElementById('loading').style.display = 'none';
            });

            // Show loading screen before window unloads
            window.addEventListener('beforeunload', function() {
                document.getElementById('loading').style.display = 'flex';
            });

            // Event handler for form submissions
            document.addEventListener('submit', function(event) {
                document.getElementById('loading').style.display = 'flex';
            }, true); // Use capture phase to ensure it runs before form submit
        });
    </script>
</body>

</html>