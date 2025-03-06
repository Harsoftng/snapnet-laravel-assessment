<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // get default user
        $user = User::whereEmail(User::DEFAULT_USER_EMAIL)->first();
        $projects = Project::get();

        foreach ($projects as $project) {
            if (null != $user && null != $project) {
                Task::factory(20)->create([
                    'user_id' => $user->id,
                    'project_id' => $project->id,
                ]);
            }
        }


    }
}
