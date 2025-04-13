<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- Removed "You're logged in!" message --}}
                </div>
            </div>
        </div>
    </div>

    <!-- Centered Content (From Welcome Page) -->
    <div class="flex flex-col items-center justify-center text-center min-h-[60vh] px-4">
        <h2 class="text-2xl sm:text-3xl font-semibold text-gray-700 mb-6">Start Investing</h2>
        
        <!-- Rounded Search Bar -->
        <div class="relative w-full max-w-2xl px-2 sm:px-0">
            <form action="{{ route('dashboard.search') }}" method="GET">
                <input type="text" name="query" value="{{ request('query') }}" placeholder="Search for stocks, markets, insights..." 
                    class="w-full px-6 py-4 text-lg rounded-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 border border-gray-300">
                <button type="submit" class="absolute right-2 top-2 bg-blue-600 text-white px-5 py-3 rounded-full hover:bg-blue-700 text-sm sm:text-base">
                    Search
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
