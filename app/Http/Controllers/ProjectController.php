<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller {
    public function index() {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    public function create() {
        return view('admin.projects.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image|max:2048',
            'url' => 'required|url',
        ]);
    

        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('projects', 'public');
        }

        Project::create($data);

        return redirect()->route('projects.index')->with('success', 'Project added successfully.');
    }

    public function edit(Project $project) {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project) {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|max:2048',
            'url' => 'nullable|url',
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('projects', 'public');
        }

        $project->update($data);

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project) {
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}
