<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-900">
    <nav class="bg-white bg-opacity-90 backdrop-blur-md fixed top-0 left-0 w-full p-4 text-center font-bold shadow-lg flex justify-center items-center gap-8 z-50">
        <a href="/" class="hover:text-yellow-500 text-lg text-gray-900">Home</a>
        <a href="/catalog" class="hover:text-yellow-500 text-lg text-gray-900">Catalog</a>
    </nav>
    
    <div class="container mx-auto">
        @yield('content')
    </div>
    <footer class="bg-white text-gray-700 text-center py-6 mt-10 shadow-lg">
        <p>CatMart</p>
    </footer>
</body>
</html>