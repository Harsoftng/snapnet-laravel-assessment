<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use App\UserRole;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if (\Auth::user()->isAdmin()) {
            $projects = Project::orderBy('created_at', 'desc')->paginate(10);
        }else{
            $projects = $request->user()->projects()->paginate(10);
        }

        return view('projects.index', [
            'projects' => $projects,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:250'],
        ]);

        $uproject = Project::create([
            'title' => $request->title,
            'user_id' => (Auth::user())->id,
        ]);

        return redirect(route('project.index', absolute: false));
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project, Request $request)
    {
        Gate::authorize('show', $project);

        $tasks = Task::whereProjectId($project->id)->get();

        return view('projects.show', [
            'project' => $project,
            'tasks' => $tasks,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project, Request $request)
    {
        Gate::authorize('edit', $project);
        return view('projects.edit', [
            'project' => $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {


        $request->validate([
            'id' => ['required', 'exists:projects,id'],
            'title' => ['required', 'string', 'max:250'],
        ]);

        $project = Project::findOrFail($request->id);

        Gate::authorize('edit', $project);

        $project->update([
            'title' => $request->title,
        ]);

        return redirect(route('project.index', absolute: false));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
