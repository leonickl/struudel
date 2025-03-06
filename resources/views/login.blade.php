<x-layout>
    <x-h1>Login</x-h1>

    <form method="POST" action="{{ route('login.post') }}" class="flex flex-col gap-5 border rounded p-5">
        @csrf

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Password:</label>
        <input type="password" name="password" required>

        <x-btn-submit>Login</x-btn-submit>
    </form>
</x-layout>
