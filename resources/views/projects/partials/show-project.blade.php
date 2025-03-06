<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="">
                <section>
                    <header>
                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                            {{ __('Project Details') }}
                        </h2>

                        <p class="mt-2 mb-3 text-sm text-gray-600 dark:text-gray-400">
                            {{ __($project->title) }}
                        </p>
                    </header>

                    <p class="mt-2 mb-3 text-sm text-gray-600 dark:text-gray-400">
                        <hr class="bg-gray-600 dark:bg-gray-400" />
                    <p/>

                    <div class="flex flex-row flex-wrap justify-stretch items-center">
                        <x-show-label :value="$project->title" title="Title"/>
                        <x-show-label :value="$project->user['name']" title="Created By"/>
                        <x-show-label :value="$project->created_at" title="Created At"/>
                    </div>

                    <p class="mt-2 mb-3 text-sm text-gray-600 dark:text-gray-400">
                        <hr class="bg-gray-600 dark:bg-gray-400"/>
                    <p/>

                </section>

            </div>

            @include("tasks.partials.manage", ['project' => $project, 'tasks' => $tasks])
        </div>
    </div>
</div>
