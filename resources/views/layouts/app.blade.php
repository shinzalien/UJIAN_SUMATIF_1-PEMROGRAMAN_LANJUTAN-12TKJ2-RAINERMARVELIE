<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Students')</title>
   @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen font-sans">
    <div class="container mx-auto py-8">
        @yield('content')
    </div>
</body>
</html>
