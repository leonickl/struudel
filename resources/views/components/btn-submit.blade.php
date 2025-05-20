<button type="submit"
    {{ $attributes->merge([
        'class' => 'font-semibold px-6 py-2 rounded-md bg-blue-200 dark:bg-blue-700 text-blue-600 dark:text-blue-200 border border-blue-400 dark:border-blue-600 hover:bg-blue-300 dark:hover:bg-blue-600 transition'
    ]) }}>
    {{ $slot }}
</button>
