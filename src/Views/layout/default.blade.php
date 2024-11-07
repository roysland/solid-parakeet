<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? APP_NAME }}</title>
    {{-- <script type="module" src="http://localhost:5173/@vite/client"></script>
    <script type="module" src="http://localhost:5173/main.js"></script> --}}
    <script>new EventSource('http://localhost:3073/esbuild').addEventListener('change', () => location.reload())</script>
    <link rel="stylesheet" href="http://localhost:3073/main.css">
    <script src="http://localhost:3073/main.js" defer></script>
</head>
<body>
    @yield('body')
</body>
</html>