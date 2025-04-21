<x-app-layout>

    <div class="py-0">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="">
                <div class="p-6 text-gray-900">
                    {{-- Removed "You're logged in!" message --}}
                </div>
            </div>
        </div>
    </div>

    <!-- Centered Content and Search Bar Combined -->
    <div class="flex flex-col items-center justify-center text-center min-h-[60vh] px-4 pt-0">
        <h2 class="text-2xl sm:text-3xl font-semibold text-gray-700 mb-6">Start Investing.....</h2>
        
        <!-- New Search Bar (Without Search Button) -->
        <div class="relative w-full max-w-2xl px-2 sm:px-0">
            <form action="{{ route('dashboard.search') }}" method="GET">
                <input type="text" name="query" value="{{ request('query') }}" placeholder="Search for stocks, markets, insights..." 
                    class="w-full px-6 py-4 text-lg rounded-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 border border-gray-300" 
                    onkeydown="if(event.key === 'Enter'){this.form.submit();}">
            </form>
        </div>
    </div>

</x-app-layout>
