@extends('admin.main.layout')
@section('content')
<div class="app-card app-card-stats-table h-100 shadow-sm">
    <div class="app-card-header p-3">
        <h4 class="app-card-title">Edit Location</h4>
    </div>
    <div class="app-card-body p-3 p-lg-4">
        <form action="{{ route('locations.update', $location->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $location->title }}" required>
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ $location->location }}" required>
            </div>
            {{-- <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{ $location->slug }}" required>
            </div> --}}
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
                @if ($location->image)
                <img src="{{ asset($location->image) }}" alt="Location Image" style="max-width: 200px;">
                @else
                <p>No image available</p>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
