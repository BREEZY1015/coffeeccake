<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-6 py-2 bg-amber-900 dark:bg-amber-500 border border-transparent rounded-md font-semibold text-md text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-yellow-700 focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-white-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
