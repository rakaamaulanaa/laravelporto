@extends('admin.layout')

@section('content')
    <div class="card">
        <div class="card-header">Edit About</div>
        <div class="card-body">
            <form action="{{ route('about.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $about->name ?? '' }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $about->title ?? '' }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" required>{{ $about->description ?? '' }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
@endsection
