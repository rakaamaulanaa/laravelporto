@extends('admin.layout')

@section('content')
    <div class="card">
        <div class="card-header">Add Project</div>
        <div class="card-body">
            <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Project Image</label>
                    <input type="file" name="image" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Project URL</label>
                    <input type="url" name="url" class="form-control" required>
                </div>
                <div class="mb-3">
                     <label class="form-label">Description</label>
                     <textarea name="description" class="form-control" required></textarea>
                </div>

                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection
