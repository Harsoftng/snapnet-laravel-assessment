@props(['text'])
@props(['icon'])
@props(['href'])

<a href="{{$href}}">
    <div {{ $attributes->merge(['class' => 'h-full rounded-lg p-4 sm:p-8 flex flex-col gap-3 items-center bg-gray-200 dark:bg-gray-500 font-medium text-sm text-gray-700 dark:text-gray-300']) }}>
        <div class="">
            <img src="{{$icon}}" alt="icon" class="size-[90px]">
        </div>
        <div class="text-2xl text-center">{{ $text }}</div>
    </div>
</a>
