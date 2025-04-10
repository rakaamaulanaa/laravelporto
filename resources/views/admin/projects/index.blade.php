@extends('admin.layout')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <span>Projects</span>
            <a href="{{ route('projects.create') }}" class="btn btn-primary">Add Project</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Link</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->title }}</td>
                            <td><img src="{{ asset('storage/' . $project->image) }}" width="100"></td>
                            <td><a href="{{ $project->url }}" target="_blank">View</a></td>
                            <td>
                                <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
