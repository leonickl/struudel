<x-layout>
    <div class="max-w-md mx-auto mt-12 px-4 sm:px-6 lg:px-8">
        <x-h1>Login</x-h1>

        <form 
            method="POST" 
            action="{{ route('login.post') }}" 
            class="mt-8 bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-xl shadow-md p-6 sm:p-8 flex flex-col gap-6"
        >
            @csrf

            <!-- Email Field -->
            <div class="flex flex-col gap-2">
                <label for="email" class="text-sm font-medium text-gray-800 dark:text-gray-200">Email:</label>
                <input 
                    type="email" 
                    name="email" 
                    id="email" 
                    required 
                    class="border border-gray-300 dark:border-gray-700 rounded-md px-4 py-2 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            <!-- Password Field -->
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

            <!-- Submit Button -->
            <x-btn-submit>Login</x-btn-submit>
        </form>
    </div>
</x-layout>
