<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="">
                <section>
                    <header>
                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                            {{ __('Manage Project') }}
                        </h2>

                        <p class="mt-2 mb-3 text-sm text-gray-600 dark:text-gray-400">
                            {{ __("Listing of all tasks.") }}
                        </p>
                    </header>

                    <div class="table w-full text-gray-600 dark:text-gray-400 mt-5">
                        <div class="table-header-group">
                            <div class="table-row">
                                <div class="table-cell border-b p-2"></div>
                                <div class="table-cell border-b p-2">S/N</div>
                                <div class="table-cell border-b p-2">Title</div>
                                <div class="table-cell border-b p-2">Owner</div>
                            </div>
                        </div>

                        <div class="table-row-group">
                            @php
                                $index = 0;
                            @endphp

                            @forelse($projects as $project)
                                @php
                                    $userName = $project->user['name']. "(" . $project->user['email']. ")";
                                @endphp

                                <div class="table-row ">
                                    <div class="table-cell border-b p-2">
                                        <x-action-button
                                            href="{{route('project.show', ['project' => $project->id])}}">
                                            View
                                        </x-action-button>

                                        <x-action-button
                                            href="{{route('project.edit', ['project' => $project->id])}}">
                                            Edit
                                        </x-action-button>

                                        <x-action-button
                                            href="{{route('project.show', ['project' => $project->id, 'action' => 'delete'])}}">
                                            Delete
                                        </x-action-button>
                                    </div>
                                    <div class="table-cell border-b p-2">{{++$index}}</div>
                                    <div class="table-cell border-b p-2">{{ $project->title }}</div>
                                    <div class="table-cell border-b p-2">{{ $userName }}</div>
                                </div>

                            @empty
                                <div class="table-row">
                                    <div class="table-cell border-b p-2">
                                        No projects found <a href="{{route('project.create')}}">add new project</a>
                                    </div>
                                </div>
                            @endforelse
                        </div>

                        <div class="">

                        </div>
                    </div>


                </section>

            </div>
        </div>
    </div>
</div>
