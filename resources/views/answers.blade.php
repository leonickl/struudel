<x-layout>
    <x-h1>Answers for "{{ $event->name }}"</x-h1>

    <div class="flex flex-row flex-wrap">
        @foreach($answers as $answer)
            <div class="m-5 p-5 border rounded w-max">
                <div class="font-bold mb-5">{{ $answer->name }}</div>

                <div class="rounded overflow-clip">
                    @foreach($event->dates as $date)
                        @php [$bg, $text] = match(@$answer->dates->$date) {
                            '0' => ['bg-red-500', 'text-red-200'],
                            '1' => ['bg-orange-500', 'text-orange-200'],
                            '2' => ['bg-green-500', 'text-green-200'],
                            default => ['bg-gray-300', 'text-gray-200'],
                        } @endphp

                        <div class="{{ $bg }} {{ $text }} text-gray-800 font-bold py-2 px-5">{{ $date }}</div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
