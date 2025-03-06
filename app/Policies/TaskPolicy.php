<?php

namespace App\Policies;

use App\Models\Task;
use App\Models\User;

class TaskPolicy
{
    /**
     * Determine if the given post can be updated by the user.
     */
    public function update(User $user, Task $task): bool
    {
        return $user->id === $task->user_id;
    }

    /**
     * Determine if the given post can be updated by the user.
     */
    public function edit(User $user, Task $task): bool
    {
        return $user->id === $task->user_id;
    }

    /**
     * Determine if the given post can be viewed by the user.
     */
    public function show(User $user, Task $task): bool
    {
        return $user->id === $task->user_id;
    }

    /**
     * Determine if the given post can be viewed by the user.
     */
    public function destroy(User $user, Task $task): bool
    {
        return $user->id === $task->user_id;
    }
}
