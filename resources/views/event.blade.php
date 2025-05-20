<x-layout>
    <div class="max-w-4xl mx-auto mt-10 px-4 sm:px-6 lg:px-8">
        <x-h1>Event "{{ $event->name }}"</x-h1>

        <!-- Buttons -->
        <x-buttons class="mt-6 flex flex-wrap gap-4">
            <x-btn-link :href="route('answers.index', $event)">Show Answers</x-btn-link>
            <x-btn :action="'copyURL()'">Copy Link</x-btn>
        </x-buttons>

        <!-- Rankings -->
        <div class="mt-8 space-y-4">
            @foreach($event->ranking() as $date => $score)
                <div class="bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-lg p-4">
                    <div class="text-gray-900 dark:text-gray-100 font-medium">
                        <span class="font-bold">{{ $date }}:</span>
                        <span class="ml-2 text-sm text-gray-700 dark:text-gray-300">{{ json_encode($score) }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Copy Link Script -->
    <script>
        function copyURL() {
            navigator.clipboard.writeText(@json(route('answers.create.short', $event))).then(() => {
                alert('Copied Link to Clipboard');
            });
        }
    </script>
</x-layout>
