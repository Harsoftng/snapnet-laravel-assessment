<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('My Projects') }}
        </h2>
    </x-slot>

    <x-back-button href="{{route('project.index')}}">
        Back
    </x-back-button>

    @include('projects.partials.show-project',['project' => $project])

</x-app-layout>
