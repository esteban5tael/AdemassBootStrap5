<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>@yield('title', 'Boostrap 5 Ademass')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bs5.css') }}" />
    @yield('styles')
</head>

<body>
    <header>
        @include('layouts.partials.navbar')
    </header>
    <div class=" ">
        <h2>@yield('h', 'Boostrap 5 Ademass')</h2>

        <div class="m-1">
            @yield('content')
        </div>
    </div>
    <footer>
        @include('layouts.partials.footer')
    </footer>
    @yield('scripts')
    <script src="{{ asset('assets/js/bs5.js') }}"></script>
</body>

</html>
