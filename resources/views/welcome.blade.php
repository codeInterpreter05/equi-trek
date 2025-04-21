<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EquiTrek</title>
    @vite('resources/css/app.css') {{-- Ensure Tailwind CSS is included --}}
</head>
<body class="flex flex-col min-h-screen">

    <!-- Navbar -->
    <nav class="w-full flex justify-between items-center px-6 py-4 bg-white shadow-md fixed top-0 left-0 right-0 z-10">
        <!-- Logo on Left -->
        <h1 class="text-2xl font-bold text-gray-800">EquiTrek</h1>
        
        <!-- Join In Button -->
        <a href="{{ route('login') }}" class="text-black bg-white-600 px-5 py-2 rounded-lg text-lg font-medium transition-transform transform hover:scale-105 hover:bg-white-700 duration-300">
            Join In
        </a>
    </nav>

    <!-- Centered Main Content -->
    <div class="flex flex-grow flex-col justify-center items-start text-left px-6 pt-20 sm:pt-24 max-w-2xl mx-auto h-screen">
        <h1 class="text-6xl sm:text-8xl font-bold text-gray-800 w-full" style="font-size: 50px;">EquiTrek</h1>
        <p class="text-lg sm:text-xl text-gray-600 mt-4">
            Empower your investment journey with cutting-edge market insights, real-time stock tracking, and data-driven analytics. EquiTrek provides the tools and intelligence you need to make informed, strategic decisions with confidence and precision.
        </p>
    </div>

</body>
</html>
