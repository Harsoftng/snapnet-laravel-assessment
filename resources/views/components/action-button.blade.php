<a {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-1 py-1 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-[10px] text-white dark:text-gray-800 tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</a>
