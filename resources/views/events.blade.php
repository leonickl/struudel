<x-layout>
    <x-h1>Events</x-h1>

    <x-buttons>
        <x-btn-link :href="route('events.create')">Create new Event</x-btn-link>
    </x-buttons>

    <div class="grid items-center justify-center">

        <div class="flex flex-wrap gap-4 gap-5 m-5">
            @foreach($events as $event)
                <div class="flex-1 border p-5 rounded min-w-50">
                    <div class="font-bold mb-5">
                        <a href="{{ route('events.view', $event) }}">{{ $event->name }}</a>
                    </div>

                    <div>
                        {{ count($event->answers) ?: 'no' }} answers
                    </div>

                    @if(count($event->answers) > 0)
                        <div>
                            {{ $event->best() === null
                                ? 'no best options found'
                                : 'best options: ' . join(', ', $event->best()) }}
                        </div>
                    @endif
                </div>
            @endforeach
        </div>

    </div>
</x-layout>
