<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="">
                <section>
                    <header>
                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                            {{ __('Project Tasks') }}
                        </h2>

                        <p class="mt-2 mb-3 text-sm text-gray-600 dark:text-gray-400">
                            {{ __('All tasks listings for the selected project') }}
                        </p>

                        <p class="mt-2 mb-3 text-sm text-gray-600 dark:text-gray-400">
                            <hr class="bg-gray-600 dark:bg-gray-400"/>
                        <p/>
                    </header>

                    <div class="table w-full text-gray-600 dark:text-gray-400 mt-5">
                        <div class="table-header-group">
                            <div class="table-row">
                                <div class="table-cell border-b p-2"></div>
                                <div class="table-cell border-b p-2">S/N</div>
                                <div class="table-cell border-b p-2">Title</div>
                                <div class="table-cell border-b p-2">Description</div>
                                <div class="table-cell border-b p-2">Due Date</div>
                                <div class="table-cell border-b p-2">Status</div>
                            </div>
                        </div>

                        <div class="table-row-group">
                            @php
                                $index = 0;
                            @endphp

                            @forelse($tasks as $task)
                                @php
                                    $userName = $task->user['name']. "(" . $task->user['email']. ")";
                                @endphp

                                <div class="table-row ">



                                    <div class="table-cell border-b p-2 items-center justify-center flex-nowrap">
                                        <x-action-button
                                            href="{{route('tasks.show', ['task' => $task->id, 'id' => $project->id])}}">
                                            View
                                        </x-action-button>

                                        <x-action-button
                                            href="{{route('tasks.edit', ['task' => $task->id, 'id' => $project->id])}}">
                                            Edit
                                        </x-action-button>

                                        <x-action-button
                                            href="{{route('tasks.show', ['task' => $task->id, 'id' => $project->id])}}">
                                            Delete
                                        </x-action-button>
                                    </div>

                                    <div class="table-cell border-b p-2">{{++$index}}</div>
                                    <div class="table-cell border-b p-2">{{ $task->title }}</div>
                                    <div class="table-cell border-b p-2">{{ $task->description }}</div>
                                    <div class="table-cell border-b p-2">{{ $task->due_date }}</div>
                                    <div class="table-cell border-b p-2">{{ $task->status }}</div>
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
