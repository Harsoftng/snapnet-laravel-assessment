<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <section>
                <header>
                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                        {{ __('Create Project') }}
                    </h2>

                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                        {{ __("Fill in the information below to create a project.") }}
                    </p>
                </header>

                <form method="post" action="{{ route('project.store') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('post')

                    <div>
                        <x-input-label for="title" :value="__('Title')"/>
                        <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title')"
                                      required autofocus autocomplete="title"/>
                        <x-input-error class="mt-2" :messages="$errors->get('title')"/>
                    </div>

                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Save') }}</x-primary-button>

                        @if (session('status') === 'project-created')
                            <p
                                x-data="{ show: true }"
                                x-show="show"
                                x-transition
                                x-init="setTimeout(() => show = false, 2000)"
                                class="text-sm text-gray-600 dark:text-gray-400"
                            >{{ __('Saved.') }}</p>
                        @endif
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
