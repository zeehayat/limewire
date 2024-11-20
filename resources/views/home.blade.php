<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    {{ $title ?? 'Page Title' }}
</head>
<body>
<div class="mr-2 ml-2">
    @yield('content')
</div>


</body>
</html>
