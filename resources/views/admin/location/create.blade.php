@extends('admin.main.layout')
@section('content')
<div class="app-card app-card-stats-table h-100 shadow-sm">
    <div class="app-card-header p-3">
        <h4 class="app-card-title">Create Location</h4>
    </div>
    <div class="app-card-body p-3 p-lg-4">
        <form action="{{ route('location.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" id="location" name="location" required>
            </div>
            {{-- <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" required>
            </div> --}}
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
@endsection
