<x-layout>
    <div class="max-w-5xl mx-auto mt-10 px-4 sm:px-6 lg:px-8">
        <x-h1>Events</x-h1>

        <!-- Action Buttons -->
        <x-buttons class="mt-6">
            <x-btn-link :href="route('events.create')">Create new Event</x-btn-link>
        </x-buttons>

        <!-- Events Grid -->
        <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($events as $event)
                <div
                    class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-xl shadow-sm p-6 flex flex-col justify-between">
                    <div class="mb-4">
                        <a href="{{ route('events.view', $event) }}"
                            class="text-xl font-semibold text-blue-600 dark:text-blue-400 hover:underline">
                            {{ $event->name }}
                        </a>
                    </div>

                    <div class="text-gray-700 dark:text-gray-300 mb-1">
                        {{ count($event->answers) ?: 'No' }} answers
                    </div>

                    @if(count($event->answers) > 0)
                            <div class="text-sm text-gray-600 dark:text-gray-400">
                                {{ $event->best() === null
                        ? 'No best options found'
                        : 'Best options: ' . join(', ', $event->best()) }}
                            </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</x-layout>