@props(['value'])
@props(['title'])

<div {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700 dark:text-gray-300']) }}>
    <h1 class="text-lg font-medium text-[16px] text-gray-900 dark:text-gray-100">
        {{ __($title) }}
    </h1>

    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
        {{ $value }}
    </p>
</div>
