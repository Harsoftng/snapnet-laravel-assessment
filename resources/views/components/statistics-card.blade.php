@props(['value'])
@props(['text'])

<div {{ $attributes->merge(['class' => 'h-full rounded-lg flex flex-col gap-3 bg-gray-200 dark:bg-gray-500 font-medium text-sm text-gray-700 dark:text-gray-300']) }}>
    <div class="h-full rounded-lg p-4 sm:p-8 flex flex-col gap-3 bg-gray-200 dark:bg-gray-500 font-medium text-sm text-gray-700 dark:text-gray-300">
        <div class="text-xl">{{ $text }}</div>
        <div class="xl:text-5xl md:text-3xl sm:text-3xl xs:text-3xl">{{ $value }}</div>
    </div>

    <div class="rounded-b-lg flex flex-row items-center justify-center bg-gray-300 dark:bg-gray-600 p-2">
        <x-primary-button class="px-[40px] rounded" href="{{route('dashboard')}}" >
            View Tasks
        </x-primary-button>
    </div>
</div>
