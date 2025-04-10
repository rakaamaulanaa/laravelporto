@extends('admin.layout')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <span>Skills</span>
            <a href="{{ route('skills.create') }}" class="btn btn-primary">Add Skill</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Level</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($skills as $skill)
                        <tr>
                            <td>{{ $skill->name }}</td>
                            <td>{{ $skill->level }}%</td>
                            <td>
                                <a href="{{ route('skills.edit', $skill->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('skills.destroy', $skill->id) }}" method="POST" style="display:inline;">
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