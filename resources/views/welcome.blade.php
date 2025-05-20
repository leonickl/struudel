<x-layout>
    <div class="max-w-md mx-auto mt-16 px-4 sm:px-6 lg:px-8 text-center">
        <x-h1>Welcome</x-h1>

        <x-buttons class="mt-8 flex flex-wrap justify-center gap-4">
            @guest
                <x-btn-link :href="route('register')" class="px-8 py-3">
                    Register
                </x-btn-link>

                <x-btn-link :href="route('login')" class="px-8 py-3">
                    Login
                </x-btn-link>
            @endguest

            @auth
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <x-btn-submit class="px-8 py-3">
                        Logout
                    </x-btn-submit>
                </form>

                <x-btn-link :href="route('events.index')" class="px-8 py-3">
                    Events
                </x-btn-link>
            @endauth
        </x-buttons>
    </div>
</x-layout>
