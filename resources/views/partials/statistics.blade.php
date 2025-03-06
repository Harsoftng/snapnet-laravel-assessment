<div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-3 gap-5 flex-wrap">
            <div class="h-full">
                <x-action-card class="" href="{{ route('project.create') }}" text="Create a new project"
                               :icon="asset('plus-dark.png')"/>
            </div>

            <div class="h-full">
                <x-action-card class="" href="{{ route('project.index') }}" text="Manage projects"
                               :icon="asset('manage-tasks.png')"/>
            </div>

            <div class="h-full">
                <x-statistics-card text="Total projects" value="500,000"/>
            </div>

            <div class="h-full">
                <x-statistics-card text="Total tasks" value="500,000"/>
            </div>

            <div class="h-full">
                <x-statistics-card text="Completed tasks" value="500,000"/>
            </div>

            <div class="h-full">
                <x-statistics-card text="Tasks in progress" value="500,000"/>
            </div>

            <div class="h-full">
                <x-statistics-card text="Pending tasks" value="500,000"/>
            </div>

            <div class="h-full">
                <x-statistics-card text="Overdue tasks" value="500,000"/>
            </div>
        </div>
    </div>
