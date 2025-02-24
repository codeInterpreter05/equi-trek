<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EquiTrek</title>
    @vite('resources/css/app.css') {{-- Ensure Tailwind CSS is included --}}
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">

    <!-- Navbar -->
    <nav class="w-full flex justify-end items-center px-6 py-4 bg-white shadow-md fixed top-0 left-0 right-0 z-10">
        <a href="{{ route('login') }}" class="text-black bg-blue-600 px-4 py-2 rounded-lg hover:bg-blue-700 text-sm sm:text-base" style="font-size: 20px;">
            Join In
        </a>
    </nav>

    <!-- Centered Main Content -->
    <div class="flex flex-grow flex-col justify-center items-center text-center px-4 pt-20 sm:pt-24">
        <h1 class="text-6xl sm:text-8xl font-bold text-gray-800" style="font-size: 80px;">EquiTrek</h1>
        <p class="text-lg sm:text-xl text-gray-600 mt-4 max-w-2xl">Your gateway to smart investing. Discover market insights, track stocks, and make informed decisions with ease.</p>
    </div>

</body>
</html>
