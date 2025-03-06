<x-layout>
    <x-h1>Register</x-h1>

    @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 m-5 rounded relative">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register.post') }}" class="flex flex-col gap-5 border rounded p-5">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" value="{{ old(('name')) }}" required>

        <label>Email:</label>
        <input type="email" name="email" value="{{ old(('email')) }}" required>

        <label>Password:</label>
        <input type="password" name="password" value="{{ old(('password')) }}" required>

        <label>Confirm Password:</label>
        <input type="password" name="password_confirmation" value="{{ old(('password_confirmation')) }}" required>

        <x-btn-submit>Register</x-btn-submit>
    </form>
</x-layout>
