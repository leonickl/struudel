<x-layout>
    <div class="max-w-3xl mx-auto mt-10 px-4 sm:px-6 lg:px-8">
        <x-h1>Create Event</x-h1>

        <form 
            action="{{ route('events.store') }}" 
            method="post"
            class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-xl p-6 sm:p-8 mt-6 shadow-lg flex flex-col gap-6"
        >
            @csrf

            <!-- Event Name -->
            <div class="flex flex-col sm:flex-row gap-4 items-start sm:items-center">
                <label for="name" class="font-semibold text-gray-800 dark:text-gray-200">Name:</label>
                <input 
                    id="name" 
                    name="name" 
                    required 
                    class="w-full sm:w-auto border border-gray-300 dark:border-gray-700 rounded-md px-4 py-2 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            <!-- Dates Section -->
            <div id="dates-container" class="flex flex-col gap-3">
                @for ($i = 0; $i < 3; $i++)
                    <div class="date-input flex items-center gap-3">
                        <input 
                            name="dates[]" 
                            type="date" 
                            class="border border-gray-300 dark:border-gray-700 rounded-md px-4 py-2 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 focus:outline-none"
                        >
                        <button 
                            type="button" 
                            onclick="removeDate(this)" 
                            class="text-red-500 hover:text-red-700 dark:hover:text-red-400 transition-colors"
                        >
                            ✖
                        </button>
                    </div>
                @endfor
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap justify-center gap-6">
                <x-btn :action="'addDate()'">+</x-btn>
                <x-btn-submit>Send</x-btn-submit>
            </div>
        </form>
    </div>

    <!-- Date Field Management Script -->
    <script>
        function addDate() {
            const datesContainer = document.getElementById('dates-container');
            const newDateDiv = document.createElement('div');
            newDateDiv.classList.add('date-input', 'flex', 'items-center', 'gap-3', 'mt-2');

            const newDateInput = document.createElement('input');
            newDateInput.name = 'dates[]';
            newDateInput.type = 'date';
            newDateInput.className = 'border border-gray-300 dark:border-gray-700 rounded-md px-4 py-2 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 focus:outline-none';

            const closeButton = document.createElement('button');
            closeButton.type = 'button';
            closeButton.className = 'text-red-500 hover:text-red-700 dark:hover:text-red-400 transition-colors';
            closeButton.textContent = '✖';
            closeButton.onclick = function () {
                removeDate(closeButton);
            };

            newDateDiv.appendChild(newDateInput);
            newDateDiv.appendChild(closeButton);
            datesContainer.appendChild(newDateDiv);
        }

        function removeDate(button) {
            const dateInputDiv = button.parentElement;
            dateInputDiv.remove();
        }
    </script>
</x-layout>
