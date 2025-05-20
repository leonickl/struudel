<x-layout>
    <div class="max-w-md mx-auto mt-12 px-4 sm:px-6 lg:px-8">
        <x-h1>Register</x-h1>

        <!-- Validation Errors -->
        @if($errors->any())
            <div class="bg-red-100 dark:bg-red-900 border border-red-400 dark:border-red-700 text-red-700 dark:text-red-100 px-4 py-3 mt-6 mb-6 rounded-lg shadow-sm">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Register Form -->
        <form 
            method="POST" 
            action="{{ route('register.post') }}" 
            class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-xl shadow-md p-6 sm:p-8 flex flex-col gap-6"
        >
            @csrf

            <!-- Name -->
            <div class="flex flex-col gap-2">
                <label for="name" class="text-sm font-medium text-gray-800 dark:text-gray-200">Name:</label>
                <input 
                    type="text" 
                    name="name" 
                    id="name" 
                    value="{{ old('name') }}" 
                    required 
                    class="border border-gray-300 dark:border-gray-700 rounded-md px-4 py-2 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            <!-- Email -->
            <div class="flex flex-col gap-2">
                <label for="email" class="text-sm font-medium text-gray-800 dark:text-gray-200">Email:</label>
                <input 
                    type="email" 
                    name="email" 
                    id="email" 
                    value="{{ old('email') }}" 
                    required 
                    class="border border-gray-300 dark:border-gray-700 rounded-md px-4 py-2 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            <!-- Password -->
            <div class="flex flex-col gap-2">
                <label for="password" class="text-sm font-medium text-gray-800 dark:text-gray-200">Password:</label>
                <input 
                    type="password" 
                    name="password" 
                    id="password" 
                    required 
                    class="border border-gray-300 dark:border-gray-700 rounded-md px-4 py-2 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            <!-- Confirm Password -->
            <div class="flex flex-col gap-2">
                <label for="password_confirmation" class="text-sm font-medium text-gray-800 dark:text-gray-200">Confirm Password:</label>
                <input 
                    type="password" 
                    name="password_confirmation" 
                    id="password_confirmation" 
                    required 
                    class="border border-gray-300 dark:border-gray-700 rounded-md px-4 py-2 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            <!-- Submit Button -->
            <x-btn-submit>Register</x-btn-submit>
        </form>
    </div>
</x-layout>
