<x-layout>
    <x-h1>Create Event</x-h1>

    <form action="{{ route('events.store') }}" method="post"
          class="border rounded m-5 p-5 flex flex-col gap-5 items-center w-max">
        @csrf

        <div class="flex flex-row gap-5 items-center">
            <div class="font-bold">Name:</div>
            <input name="name" class="border p-2 rounded" required>
        </div>

        <div id="dates-container" class="flex flex-col gap-2">
            <div class="date-input flex items-center gap-2">
                <input name="dates[]" type="date" class="border rounded px-5 py-2 w-max">
                <button type="button" onclick="removeDate(this)"
                        class="text-red-500 hover:text-red-700 focus:outline-none">✖
                </button>
            </div>
            <div class="date-input flex items-center gap-2">
                <input name="dates[]" type="date" class="border rounded px-5 py-2 w-max">
                <button type="button" onclick="removeDate(this)"
                        class="text-red-500 hover:text-red-700 focus:outline-none">✖
                </button>
            </div>
            <div class="date-input flex items-center gap-2">
                <input name="dates[]" type="date" class="border rounded px-5 py-2 w-max">
                <button type="button" onclick="removeDate(this)"
                        class="text-red-500 hover:text-red-700 focus:outline-none">✖
                </button>
            </div>
        </div>

        <div class="flex flex-row gap-10">
            <x-btn :action="'addDate()'">+</x-btn>
            <x-btn :action="'removeDate()'">&times;</x-btn>
        </div>

        <x-btn-submit>Send</x-btn-submit>
    </form>

    <script>
        function addDate() {
            const datesContainer = document.getElementById('dates-container');
            const newDateDiv = document.createElement('div');
            newDateDiv.classList.add('date-input', 'flex', 'items-center', 'gap-2');

            const newDateInput = document.createElement('input');
            newDateInput.name = 'dates[]';
            newDateInput.type = 'date';
            newDateInput.classList = 'border rounded px-5 py-2';

            const closeButton = document.createElement('button');
            closeButton.type = 'button';
            closeButton.onclick = function () {
                removeDate(closeButton);
            };
            closeButton.classList = 'text-red-500 hover:text-red-700 focus:outline-none';
            closeButton.innerText = '✖';

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
