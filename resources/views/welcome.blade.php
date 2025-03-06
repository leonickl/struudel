<x-layout>
    <x-h1>Welcome</x-h1>


    <x-buttons>
        @guest
            <a href="{{ route('register') }}"
               class="text-center font-bold bg-blue-200 text-blue-600 px-10 py-2 border rounded-lg">Register</a>
            <a href="{{ route('login') }}"
               class="text-center font-bold bg-blue-200 text-blue-600 px-10 py-2 border rounded-lg">Login</a>
        @endguest

        @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                        class="text-center font-bold bg-blue-200 text-blue-600 px-10 py-2 border rounded-lg">
                    Logout
                </button>
            </form>

            <a href="{{ route('events.index') }}"
               class="text-center font-bold bg-blue-200 text-blue-600 px-10 py-2 border rounded-lg">Events</a>
        @endauth
    </x-buttons>
</x-layout>
