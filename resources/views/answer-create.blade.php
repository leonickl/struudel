<x-layout>
    <x-h1>Answer for "{{ $event->name }}"</x-h1>

    <form action="{{ route('answers.store', $event) }}" method="post"
        class="max-w-3xl mx-auto mt-8 bg-white dark:bg-gray-900 shadow-lg border border-gray-200 dark:border-gray-800 rounded-xl p-6 sm:p-8 flex flex-col gap-6">
        @csrf

        <!-- Name Input -->
        <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3">
            <label for="name" class="font-semibold text-gray-800 dark:text-gray-200">Name:</label>
            <input id="name" name="name" required
                class="flex-1 border border-gray-300 dark:border-gray-700 rounded-md px-4 py-2 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        <!-- Dates Selection -->
        <div id="dates-container" class="flex flex-col gap-6">
            @foreach($event->dates as $date)
                <div
                    class="flex flex-col sm:flex-row sm:items-center gap-4 justify-between bg-gray-50 dark:bg-gray-800 rounded-md p-4 shadow-sm">
                    <div class="font-medium text-gray-900 dark:text-gray-100">{{ $date }}</div>

                    <div class="flex gap-2">
                        <!-- Yes Option -->
                        <label class="flex items-center">
                            <input type="radio" name="dates[{{ $date }}]" value="2" class="hidden peer" />
                            <span
                                class="px-4 py-1 rounded-full bg-green-500 border border-green-700 text-white cursor-pointer peer-checked:bg-green-700 peer-checked:border-green-900 transition-colors">
                                Yes
                            </span>
                        </label>

                        <!-- Maybe Option -->
                        <label class="flex items-center">
                            <input type="radio" name="dates[{{ $date }}]" value="1" class="hidden peer" />
                            <span
                                class="px-4 py-1 rounded-full bg-orange-500 border border-orange-700 text-white cursor-pointer peer-checked:bg-orange-700 peer-checked:border-orange-900 transition-colors">
                                Maybe
                            </span>
                        </label>

                        <!-- No Option -->
                        <label class="flex items-center">
                            <input type="radio" name="dates[{{ $date }}]" value="0" class="hidden peer" />
                            <span
                                class="px-4 py-1 rounded-full bg-red-500 border border-red-700 text-white cursor-pointer peer-checked:bg-red-700 peer-checked:border-red-900 transition-colors">
                                No
                            </span>
                        </label>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Submit Button -->
        <div class="flex justify-center">
            <x-btn-submit class="w-full sm:w-auto">Send</x-btn-submit>
        </div>
    </form>
</x-layout>