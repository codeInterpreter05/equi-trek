<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EquiTrek</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-50">
    
    <form method="POST" action="{{ route('login') }}" class="w-96 border border-gray-300 p-8 rounded-3xl shadow-xl text-center bg-white space-y-6">
        <div class="text-left">
            <h1 class="text-3xl font-extrabold text-gray-900">EquiTrek</h1>
            <p class="text-gray-600 text-lg">Your Gateway to Smart Investing</p>
        </div>
        
        <div class="flex justify-center">
            <a href="{{ route('auth.google') }}" class="w-70 flex items-center justify-center gap-3 px-6 py-3 text-lg font-semibold text-gray-700 bg-blue-300 border border-gray-300 rounded-lg shadow-md hover:bg-red-300 transition">
                <svg class="w-6 h-6" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#EA4335" d="M24 9.5c3.37 0 6.44 1.15 8.88 3.04l6.61-6.61C34.88 2.34 29.71.5 24 .5 14.73.5 6.71 6.19 3.01 14.28l7.77 6.04C12.66 14.96 17.88 9.5 24 9.5z"/>
                    <path fill="#4285F4" d="M46.5 24.5c0-1.63-.15-3.2-.43-4.71H24v9.43h12.66c-.89 4.47-3.63 8.23-7.54 10.71l7.77 6.04C42.14 41.27 46.5 33.53 46.5 24.5z"/>
                    <path fill="#FBBC05" d="M3.01 14.28A23.94 23.94 0 0 0 .5 24c0 3.33.64 6.5 1.8 9.43l7.77-6.04C8.9 25.77 8.5 24.01 8.5 22c0-2.01.4-3.77 1.07-5.43L3.01 14.28z"/>
                    <path fill="#34A853" d="M24 47.5c6.37 0 11.73-2.14 15.69-5.71l-7.77-6.04c-2.12 1.41-4.79 2.25-7.92 2.25-6.12 0-11.34-4.46-12.23-10.25L3.31 33.43C7.01 41.81 14.73 47.5 24 47.5z"/>
                </svg>
                <span>Sign up with Google</span>
            </a>
        </div>

        <p class="text-gray-500 text-sm">By logging in, you agree to our <a href="https://policies.google.com/terms/archive/19990920?hl=en" class="text-blue-600 hover:underline">Terms</a> and <a href="https://policies.google.com/privacy?hl=en" class="text-blue-600 hover:underline">Privacy Policy</a>.</p>
    </form>
    
</body>
</html>





