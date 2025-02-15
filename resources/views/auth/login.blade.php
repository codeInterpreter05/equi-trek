<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="flex items-center justify-center mt-4">
            <a href="{{ route('auth.google') }}" class="inline-block px-6 py-2 mb-3 text-white bg-red-600 rounded-lg shadow">
                Login with Google
            </a>
        </div>
    </form>
</x-guest-layout>
 