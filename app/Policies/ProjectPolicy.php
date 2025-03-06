<?php

namespace App\Policies;

use App\Models\Project;
use App\Models\User;

class ProjectPolicy
{
    /**
     * Determine if the given post can be updated by the user.
     */
    public function update(User $user, Project $project): bool
    {
        return $user->id === $project->user_id;
    }

    /**
     * Determine if the given post can be updated by the user.
     */
    public function edit(User $user, Project $project): bool
    {
        return $user->id === $project->user_id;
    }

    /**
     * Determine if the given post can be viewed by the user.
     */
    public function show(User $user, Project $project): bool
    {
        return $user->id === $project->user_id;
    }

    /**
     * Determine if the given post can be viewed by the user.
     */
    public function destroy(User $user, Project $project): bool
    {
        return $user->id === $project->user_id;
    }
}
