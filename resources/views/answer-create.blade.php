<x-layout>
    <x-h1>Answer for "{{ $event->name }}"</x-h1>

    <form action="{{ route('answers.store', $event) }}" method="post"
          class="border rounded m-5 p-5 flex flex-col gap-8 items-center w-max">
        @csrf

        <div class="flex flex-row gap-5 items-center">
            <div class="font-bold">Name:</div>
            <input name="name" class="border p-2 rounded" required>
        </div>

        <div id="dates-container" class="flex flex-col gap-5 w-1/3">
            @foreach($event->dates as $date)
                <div class="flex space-x-4 justify-center items-center">
                    <div class="font-bold">{{ $date }}</div>

                    <label class="flex items-center space-x-2">
                        <input type="radio" name="dates[{{ $date }}]" value="2" class="hidden peer"/>
                        <span
                            class="px-4 py-1 rounded-full bg-green-500 border border-green-700 text-white cursor-pointer peer-checked:bg-green-700 peer-checked:border-green-900">Yes</span>
                    </label>

                    <label class="flex items-center space-x-2">
                        <input type="radio" name="dates[{{ $date }}]" value="1" class="hidden peer"/>
                        <span
                            class="px-4 py-1 rounded-full bg-orange-500 border border-orange-700 text-white cursor-pointer peer-checked:bg-orange-700 peer-checked:border-orange-900">Maybe</span>
                    </label>

                    <label class="flex items-center space-x-2">
                        <input type="radio" name="dates[{{ $date }}]" value="0" class="hidden peer"/>
                        <span
                            class="px-4 py-1 rounded-full bg-red-500 border border-red-700 text-white cursor-pointer peer-checked:bg-red-700 peer-checked:border-red-900">No</span>

                    </label>
                </div>
            @endforeach
        </div>

        <x-btn-submit>Send</x-btn-submit>
    </form>
</x-layout>
