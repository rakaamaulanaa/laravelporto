@extends('admin.layout')

@section('content')
    <div class="card">
        <div class="card-header">Add Skill</div>
        <div class="card-body">
            <form action="{{ route('skills.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Skill Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Skill Level (%)</label>
                    <input type="number" name="level" class="form-control" min="1" max="100" required>
                </div>
                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection