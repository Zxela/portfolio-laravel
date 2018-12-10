<meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
 <script src="{{ asset('js/app.js') }}" defer></script>

<main class="py-4">
    @yield('content')
</main>