<x-layout>
    <div class="max-w-5xl mx-auto mt-10 px-4 sm:px-6 lg:px-8">
        <x-h1>Answers for "{{ $event->name }}"</x-h1>

        <div class="flex flex-wrap justify-center gap-6 mt-8">
            @foreach($answers as $answer)
                <div class="w-full sm:w-auto bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-xl shadow-md p-6">
                    <div class="font-semibold text-lg text-gray-900 dark:text-gray-100 mb-4 text-center">
                        {{ $answer->name }}
                    </div>

                    <div class="flex flex-col divide-y divide-gray-200 dark:divide-gray-700 rounded overflow-hidden">
                        @foreach($event->dates as $date)
                            @php [$bg, $text] = match(@$answer->dates->$date) {
                                '0' => ['bg-red-500', 'text-red-100'],
                                '1' => ['bg-orange-500', 'text-orange-100'],
                                '2' => ['bg-green-500', 'text-green-100'],
                                default => ['bg-gray-400', 'text-gray-100'],
                            } @endphp

                            <div class="{{ $bg }} {{ $text }} font-medium text-center py-2 px-4 text-gray-900 dark:text-gray-800">
                                {{ $date }}
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
