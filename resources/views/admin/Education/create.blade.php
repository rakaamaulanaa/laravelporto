@extends('admin.layout')

@section('content')
    <div class="card">
        <div class="card-header">Add Education</div>
        <div class="card-body">
            <form action="{{ route('education.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Institution</label>
                    <input type="text" name="institution" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Degree</label>
                    <input type="text" name="degree" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Year</label>
                    <input type="text" name="year" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection
