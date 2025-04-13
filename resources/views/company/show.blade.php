<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Company Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-xl font-semibold mb-4">Company Details</h3>
                    <p><strong>Name:</strong> {{ $company->name }}</p>
                    <p><strong>Symbol:</strong> {{ $company->symbol }}</p>
                    <p><strong>Sector:</strong> {{ $company->sector }}</p>
                    <p><strong>Industry:</strong> {{ $company->industry }}</p>
                    <p><strong>Market Cap:</strong> {{ $company->market_cap }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
