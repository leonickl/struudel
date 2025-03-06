<x-layout>
    <x-h1>Event "{{ $event->name }}"</x-h1>

    <x-buttons>
        <x-btn-link :href="route('answers.index', $event)">Show Answers</x-btn-link>
        <x-btn :action="'copyURL()'">Copy Link</x-btn>
    </x-buttons>

    <div>
        @foreach($event->ranking() as $date => $score)
            <div>
                <label class="font-bold">{{ $date }}: </label>
                {{ json_encode($score) }}
            </div>
        @endforeach
    </div>

    <script>
        function copyURL() {
            navigator.clipboard.writeText(@json(route('answers.create.short', $event))).then(() => {
                alert('Copied Link to Clipboard')
            })
        }
    </script>
</x-layout>
