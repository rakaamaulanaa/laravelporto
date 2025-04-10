@extends('admin.layout')

@section('content')
    <div class="card">
        <div class="card-header">About</div>
        <div class="card-body">
            <p><strong>Name:</strong> {{ $about->name ?? 'Not Set' }}</p>
            <p><strong>Title:</strong> {{ $about->title ?? 'Not Set' }}</p>
            <p><strong>Description:</strong> {{ $about->description ?? 'Not Set' }}</p>
            <a href="{{ route('about.edit') }}" class="btn btn-primary">Edit</a>
        </div>
    </div>
@endsection
