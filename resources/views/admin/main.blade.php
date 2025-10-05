<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    @include('admin.partials.header')

    <main class="container mt-4">
        @yield('content')
    </main>

    @include('admin.partials.footer')
</body>
</html>
